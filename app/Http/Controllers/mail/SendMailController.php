<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Mail\MyTestEmail;
class sendMailController extends Controller
{
    public function send()
    {
        $to = 'mahzadazizi@gmail.com';
        $fromAddress = 'admin@mysite.com';
        $subject = 'پیام عضویت';
        $body='عضویت شما در سایت با موفقیت انجام شد';
        $fullname = 'مهزاد عزیزی';
        $username = 'azizi123';

       if (Mail::to($to)->send(new MyTestEmail($subject , $fromAddress ,$fullname , $username,  $body))) return "<h2> ایمیل ارسال گردید </h2>"; else return "<h2> خطا در ارسال ایمیل </h2>";
    }
}
