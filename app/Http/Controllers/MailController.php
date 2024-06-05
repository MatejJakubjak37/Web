<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\SendMail;
use App\Mail\SendMessageToEndUser;
use Mail;

class MailController extends Controller
{
    public function maildata(Request $request)
    {
        $name = $request->name;
        $email = $request->email;
        $phone = $request->phone;
        $subject = $request->subject;
        $mess = $request->mess;
        $url = 'https://kmetik.sk/';
        $send_mail = 'jakubjakm37@gmail.com';
        Mail::to($send_mail)->send(new SendMail($name, $email, $phone, $subject, $mess, $url));
        $senderMessage = "ďakujeme za váš email a za váš záujem o naše služby. Vaša správa bola úspešne prijatá a budeme vás kontaktovať čo najskôr.";
        Mail::to($email)->send(new SendMessageToEndUser($name, $senderMessage, $url, $subject));
        return redirect('/');
    }
}