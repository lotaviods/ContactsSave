<?php
namespace Lotaviods\bank;
use PDO;

class ConnectBank
{
    public static function CreateConnection(): PDO
    {
        //return new PDO("sqlite:./Banco.sqlite");
        $connect = new PDO("mysql:host=localhost;dbname=banco;port=3306;", 'root', ''); 
        $connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $connect;
    }

}
