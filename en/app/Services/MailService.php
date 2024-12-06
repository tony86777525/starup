<?php

namespace App\Services;

use Illuminate\Support\Facades\Mail;

class MailService
{
    public static function sendMail($data)
    {
        $postNoticeMailData = self::getPostNoticeMailData(
            $data['fromName'],
            $data['fromEmail'],
            $data['toName'],
            $data['toEmail']
        );

        Mail::send('email.post', $data, function($message) use ($postNoticeMailData) {
            $message->to($postNoticeMailData['toMail'], $postNoticeMailData['toName'])
                ->cc(['368@careernet.org.tw'])
                ->subject($postNoticeMailData['subject']);

            $message->from($postNoticeMailData['fromMail'], $postNoticeMailData['fromName']);
        });
    }

    private static function getPostNoticeMailData($fromName, $fromEmail, $toName, $toEmail)
    {
        $subject = 'New Comments from SPT';
        $toName = 'sme';
        $toMails = [
            $toEmail
        ];

        return [
            'subject' => $subject,
            'fromName' => $fromName,
            'fromMail' => $fromEmail,
            'toName' => $toName,
            'toMail' => $toMails,
        ];
    }
}
