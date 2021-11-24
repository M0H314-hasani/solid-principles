<?php
/**
 * O - OCP - Open/Close Principal = Entities should be open for extension, but close for modification.
 * Separate extensible behind an interface, and flip the dependencies - uncle Bob
 */

use SOLID\Parsclick\OCP\BitCoinPaymentMethod;
use SOLID\Parsclick\OCP\CashPaymentMethod;
use SOLID\Parsclick\OCP\Payment;

require '../../vendor/autoload.php';

$payment = new Payment;
$payment->accept(new CashPaymentMethod);
echo "\n";
$payment->accept(new BitCoinPaymentMethod);
