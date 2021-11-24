<?php
/**
 * D - DIP - Dependence Inversion principal  = High-level modules shouldn't depend on low-level modules instead an abstractions, not on concretions
 */

use SOLID\Parsclick\DIP\SendGridMailer;
use SOLID\Parsclick\DIP\SmtpMailer;
use SOLID\Parsclick\DIP\User;

require '../../vendor/autoload.php';

$user = new User(new SmtpMailer);
$user->create();
echo "\n";
$user->mailer = new SendGridMailer;
$user->create();