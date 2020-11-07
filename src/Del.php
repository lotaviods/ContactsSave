<?php
use Lotaviods\Contacts\BankConf;
use Lotaviods\Contacts\ConnectBank;
require_once "./vendor/autoload.php";
    $connect = ConnectBank::CreateConnection();
    $bank = new BankConf($connect);
    $bank->DelAll();
