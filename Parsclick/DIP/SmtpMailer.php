<?php

namespace SOLID\Parsclick\DIP;

class SmtpMailer implements MailerInterface
{
    public function send()
    {
        echo "email sent by smtp";
    }
}
