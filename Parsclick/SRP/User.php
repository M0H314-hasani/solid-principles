<?php

namespace SOLID\Parsclick\SRP;

class User
{
    public function create()
    {
        try {
            throw new \Exception("Something wrong in creation of user !!!");
            echo "User created successfully\n";
        } catch (\Exception $e) {
            Logger::log($e->getMessage());
        }
    }
}