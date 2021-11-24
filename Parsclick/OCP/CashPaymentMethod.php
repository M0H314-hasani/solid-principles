<?php

namespace SOLID\Parsclick\OCP;

class CashPaymentMethod implements PaymentInterface
{
    public function payOff()
    {
        echo "Cash paying";
    }
}