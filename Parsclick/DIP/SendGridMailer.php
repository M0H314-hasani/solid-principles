<?php

namespace SOLID\Parsclick\DIP;

class SendGridMailer implements MailerInterface
{
    public function send()
    {
        echo "email sent by SendGrip API";
    }
}
