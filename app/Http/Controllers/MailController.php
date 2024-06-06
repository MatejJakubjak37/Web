<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\SendMail;
use App\Mail\SendMessageToEndUser;
use Mail;
use Illuminate\Support\Facades\Validator;

class MailController extends Controller
{
    public function maildata(Request $request)
    {
        $validator = Validator::make(
            $request->all(),
            [
                'g-recaptcha-response' => 'required|captcha'
            ]
        );

        if ($validator->fails())   //check all validations are fine, if not then redirect and show error messages
        {
            return back()->withInput()->withErrors($validator);
        } else {
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

    public function refreshCaptcha()
    {
        return response()->json(['captcha' => captcha_img()]);
    }
}