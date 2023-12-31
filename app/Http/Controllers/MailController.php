<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;
use App\Mail\DemoMail;

class MailController extends Controller
{
    // /**
    //  * Write code on Method
    //  *
    //  * @return response()
    //  */
    // public function index()
    // {
    //     $mailData = [
    //         'title' => 'Mail from ItSolutionStuff.com',
    //         'body' => 'This is for testing email using smtp.'
    //     ];

    //     Mail::to('sumi143yy@gmail.com')->send(new DemoMail($mailData));

    //     dd("Email is sent successfully.");
    // }
    public function send()
    {
        request()->validate(['email' => 'required|email']);

        Mail::to(request('email'))->send(new DemoMail('Amy Chen')); //主要跟上次差別在這行

        return redirect('/')->with('message', 'email sent');
    }
}
