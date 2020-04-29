<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ContactUs extends Mailable
{
    use Queueable, SerializesModels;

    public $name;
    public $email;
    public $topic;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($name, $email, $topic)
    {
        //Set topic variable to be usable!
        $this->name = $name;
        $this->email = $email;
        $this->topic = $topic;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        //return var_dump($this);
        return $this->view('contact.email')
            ->subject('Someone to e-mail about:  ' . $this->topic);
    }
}
