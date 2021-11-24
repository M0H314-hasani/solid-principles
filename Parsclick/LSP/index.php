<?php
/**
 * L - LSP - Liskov substitution principal  = Derived classes must be substitutable for their base classes.
 * Child class couldn't change behavior of Parent class
 * Child class shouldn't change output of parent class
 */

use SOLID\Parsclick\LSP\Honda;

require '../../vendor/autoload.php';

$car = new Honda;
echo $car->drive();