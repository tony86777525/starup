<?php

namespace App\Admin\Controllers\User\Api;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

use Illuminate\Http\Request;

class FroalaEditorUploadController extends Controller
{
    public function uploadImage(Request $request)
    {
        $file = $request->file('file');

        $uniqueId = $file->store('temp', 'admin');

        $hash = sha1($uniqueId);
        $path = substr($hash, 0, 3) . '/' . substr($hash, 3, 3) . '/' . substr($hash, 6, 3);

        $filePath = $path . '/' . $hash . '.' . $file->guessExtension();;

        Storage::disk('admin')->move($uniqueId, $filePath);
        $link = Storage::disk('admin')->url($filePath);


        $data = ['link' => $link];

        return json_encode($data);
    }
}
