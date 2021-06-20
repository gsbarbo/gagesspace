<?php

namespace App\Http\Controllers;

use App\Http\Requests\EmailRequest;
use App\Mail\ContactSubmitted;
use Illuminate\Support\Facades\Mail;

class SendEmailController extends Controller
{
    public function send(EmailRequest $request)
    {
        Mail::to('gagebarbour@outlook.com')->send(new ContactSubmitted($request->validated()));

        return redirect()->route('home')->with('success', 'Email Sent!');
    }
}
