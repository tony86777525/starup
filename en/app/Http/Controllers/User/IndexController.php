<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\News;
use App\Services\MailService;
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
        $postData = $request->all();

        $statusCode = 200;
        $response = [
            'type' => false,
            'message' => '',
        ];

        if (!empty($postData)) {
            if (
                $postData['name'] != ''
                && $postData['email'] != ''
                && $postData['comments'] != ''
                && @$_COOKIE['mail'] != 'sent'
            ) {
                $data['fromName'] = $postData['name'];
                $data['fromEmail'] = $postData['email'];
                $data['toName'] = 'sme';
                $data['toEmail'] = "sme@careernet.org.tw";
                $data['comments'] = $postData['comments'];

                try {
                    MailService::sendMail($data);

                    setcookie("mail", "sent", time() + 60 * 3);
                    $response['message'] = "Send a comment successfully";
                    $response['type'] = true;
                } catch (\Exception $e) {
                    $statusCode = 500;

                    $response['message'] = "Sending a comment failed. Please send again or contact us directly.";
                }
            } elseif(isset($_COOKIE['mail']) && $_COOKIE['mail'] == 'sent') {
                $statusCode = 429;
                $response['message'] = "You have sent comment, try again later.";
            } else {
                $statusCode = 400;
                $response['message'] = "Please input all fields";
            }
        }

        return response($response, $statusCode);
    }
}
