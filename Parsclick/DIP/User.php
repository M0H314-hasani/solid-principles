<?php

namespace SOLID\Parsclick\DIP;

class User
{
    public function __construct(Public MailerInterface $mailer){}

    public function create()
    {
        echo "User created successfully\n";
        $this->mailer->send();
    }
}
