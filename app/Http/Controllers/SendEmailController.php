<?php

namespace App\Http\Controllers;

use App\Http\Requests\EmailRequest;
use App\Mail\ContactSubmitted;
use Illuminate\Support\Facades\Mail;

class SendEmailController extends Controller
{
    public function send(EmailRequest $request)
    {
        Mail::to(['gagesspace@outlook.com', 'hello@gages.space'])->send(new ContactSubmitted($request->validated(), $request->ip()));

        return redirect()->route('home')->with('success', 'Email Sent!');
    }
}
