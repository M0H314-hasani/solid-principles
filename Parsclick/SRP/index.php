<?php
/**
 * S - SRP - Single Responsibility Principal = A class should have one, and only one, reason to change.
 */
use SOLID\Parsclick\SRP\User;

require '../../vendor/autoload.php';

$user = new User;
$user->create();