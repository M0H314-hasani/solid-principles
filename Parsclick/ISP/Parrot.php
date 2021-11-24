<?php

namespace SOLID\Parsclick\ISP;

use SOLID\Parsclick\ISP\Interfaces\FlyInterface;
use SOLID\Parsclick\ISP\Interfaces\WalkInterface;

class Parrot implements FlyInterface, WalkInterface
{
    public function fly(){
        return "Parrot can fly";
    }

    public function walk()
    {
        return "Parrot can walk";
    }
}