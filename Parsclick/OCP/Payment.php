<?php

namespace SOLID\Parsclick\OCP;

class Payment
{
    public function accept(PaymentInterface $paymentMethod)
    {
        $paymentMethod->payOff();
    }
}