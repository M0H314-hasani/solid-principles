<?php

namespace SOLID\Parsclick\OCP;

class BitCoinPaymentMethod implements PaymentInterface
{
    public function payOff()
    {
        echo "Bitcoin paying";
    }
}