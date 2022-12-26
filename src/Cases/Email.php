<?php

namespace Doyoque\Coldspaze\Cases;

class Email
{
    protected $sender;
    protected $recipient;
    protected $subject;
    protected $body;

    public function __construct($sender, $recipient, $subject, $body)
    {
        $this->sender = $sender;
        $this->recipient = $recipient;
        $this->subject = $subject;
        $this->body = $body;
    }

    public function send()
    {
        $headers = "From: $this->sender\n\n";
        mail($this->recipient, $this->subject, $this->body, $headers);
    }
}
