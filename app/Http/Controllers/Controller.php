<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

abstract class Controller
{
    public function sendMail($data){

        $subject = $data['subject'];
        $toMail = $data['to_mail'];
        $toName = $data['to_name'];
        $body = $data['body'];

        $apiKey = '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';
        $respose = Http::withHeaders([
            'api-key' => $apiKey,
            'Content-Type' => 'application/json',
        ])->post('https://api.brevo.com/v3/smtp/email', [
            'sender' => [
                'name' => 'Aaley Ceylon',
                'email' => 'hello@aaleyceylon.com',
            ],
            'to' => [
                ['name' => $toName, 'email' => $toMail]
            ],
            'subject' => $subject,
            'htmlContent' => $body,
        ]);

        if ($respose->successful()) {
            return response()->json(['message' => 'success'], 200);
        }else{
            return response()->json(['message' => 'error'], 200);
        }
    }
}
