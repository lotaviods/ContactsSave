<?php
namespace Lotaviods\bank;
use PDO;
class ConnectBank
{
    public static function CreateConnection(): PDO
    {

        $connect = new PDO("mysql:host=localhost;dbname=contatos;port=3306;", 'root', ''); 
        $connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $connect;
    }

}
