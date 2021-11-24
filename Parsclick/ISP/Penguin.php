<?php

namespace SOLID\Parsclick\ISP;

use SOLID\Parsclick\ISP\Interfaces\WalkInterface;

class Penguin implements WalkInterface
{
    public function walk()
    {
        return "Penguin can walk";
    }
}