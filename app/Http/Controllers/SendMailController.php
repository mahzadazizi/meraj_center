<?php

namespace App\Http\Controllers;
use App\Mail\MyTestEmail;
use Illuminate\Support\Facades\Mail;

use Illuminate\Http\Request;

class SendMailController extends Controller
{
   

    public function send()
    {
        $to = 'mahzad123@gmail.com';
        $fromAddress = 'admin@mysite.com';
        $subject = 'پیام عضویت';
        $body='عضویت شما در سایت با موفقیت انجام شد';
        $fullname = 'مهزاد عزیزی';
        $username = 'm.azizi';

       if (Mail::to($to)->send(new MyTestEmail($subject , $fromAddress ,$fullname , $username,  $body))) return "<h2> ایمیل ارسال گردید </h2>"; else return "<h2> خطا در ارسال ایمیل </h2>";
    }
}
