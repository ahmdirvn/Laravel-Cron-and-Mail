<?php

namespace App\Http\Controllers;

use App\Mail\WelcomeEmail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendEmail;

class SendEmailController extends Controller
{
    //
    public function sendEmail(Request $request){
        //data 
        $data =  [
            'subject' => 'Testing Kirim Email',
            'title' => 'Testing Kirim Email',
            'body' => 'Ini adalah email uji coba dari Tutorial Laravel: Send Email Via SMTP GMAIL @ qadrLabs.com'
        ];

        Mail::to('ahmad.irvan.maulana@polines.ac.id')->send(new SendEmail($data));

        return response()->json(
            [
                'message' => 'Email sent successfully',
            ]
            );
    }
}
