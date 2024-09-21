<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\News;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index()
    {
        $query = new News();

        $news = $query
            ->where('enabled', '=', 1)
            ->orderBy('art_date', 'DESC')
            ->take(6)
            ->get();

        $news = $news->chunk(3);

        return view('user.index', compact('news'));
    }
    
    public function sendMail(Request $request)
    {
        $data = $request->all();

        $statusCode = 200;
        $response = [
            'message' => '',
            'type' => false,
        ];

        if (!empty($data)) {
            if ($data['name'] != '' && $data['email'] != '' && $data['comments'] != '' && @$_COOKIE['mail'] != 'sent') {
                $name = $data['name'];
                $email = $data['email'];
                $sub = "New Comments from IEIT";
                $content = $data['comments'];

                mb_internal_encoding("utf-8");
                // $to = "sme@careernet.org.tw";
                $to = "tony86777525@gmail.com";

                $subject = mb_encode_mimeheader("$sub", "utf-8");
                $message = "$content";
                $headers = "MIME-Version: 1.0\r\n";
                $headers .= "Content-type: text/plain; charset=utf-8\r\n";
                $headers .= "From:" . mb_encode_mimeheader("$name", "utf-8") . "<$email>\r\n";

                if (mail($to, $subject, $message, $headers)) {
                    setcookie("mail", "sent", time() + 60 * 3);
                    $response['message'] = "Send a comment successfully";
                    $response['type'] = true;
                } else {
                    $response['message'] = "Sending a comment failed. Please send again or contact us directly.";
                }
            } elseif(isset($_COOKIE['mail']) && $_COOKIE['mail'] == 'sent') {
                $response['message'] = "You have sent comment, try again later.";
            } else {
                $response['message'] = "Please input all fields";
            }
        }

        return response()->json($response, $statusCode);
    }
}
