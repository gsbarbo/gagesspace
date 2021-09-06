<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ContactSubmitted extends Mailable
{
    use Queueable, SerializesModels;

    public $form_data;
    public $from_ip;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($data, $ip)
    {
        $this->form_data = $data;
        $this->from_ip = $ip;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from('no-reply@gages.space')->subject('New Contact Us From gages.space from ' . $this->form_data['name'])->view('emails.contact');

    }
}
