<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use Mail;
use Illuminate\Support\Facades\Mail;
use App\Mail\DemoMail;
class MailController extends Controller
{
public function index()
{ $email = 'veravalonline@gmail.com';
    $mailData=[
        'title'=>'Mail From VeravalOnline',
        'body'=>'This is for Resume Created Successfully',

    ];
    Mail::to($email)->send(new DemoMail($mailData));
    dd('Email Send Successfully');
}
}
