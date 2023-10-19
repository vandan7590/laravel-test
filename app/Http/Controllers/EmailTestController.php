<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;

class EmailTestController extends Controller
{
    public function index()
    {
        return view("test.email-test");
    }

    public function sendEmail(Request $request)
    {
        $email = $request->input('email');
        $message = $request->input('message');

        // Send the email
        Mail::send('test.email-view', ['messages' => $message], function ($mail) use ($email) {
            $mail->from('no-reply@cybernetworks.net.au', 'Cybernetworks');
            $mail->to($email)->subject('Testing Email');
        });
        return "Email sent successfully!";
    }
}
