<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\MailController;

class MailController extends Controller
{
    public function index()
    {
        Mail::to('jakubjakm37@gmail.com')->send(new TestMail());
    }
}
