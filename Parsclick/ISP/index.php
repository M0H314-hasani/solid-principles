<?php
/**
 * I - ISP - Interface segregation principal  = A client should not be forced to implement an interface that it doesn't us.
 */

use SOLID\Parsclick\ISP\Parrot;
use SOLID\Parsclick\ISP\Penguin;

require '../../vendor/autoload.php';


$parrot = new Parrot;
echo $parrot->fly() . "\n";
echo $parrot->walk() . "\n";

$penguin = new Penguin;
echo $penguin->walk() . "\n";