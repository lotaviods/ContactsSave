<?php

use Lotaviods\Contacts\Config\BankFunctions;
require_once __DIR__ . "/../vendor/autoload.php";
    $bank = new BankFunctions();
    $bank->DelAll();