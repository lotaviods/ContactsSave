<?php
use Lotaviods\bank\BankConf;
use Lotaviods\bank\ConnectBank;
require_once "./vendor/autoload.php";
    $connect = ConnectBank::CreateConnection();
    $bank = new BankConf($connect);
    $bank->DelAll();
