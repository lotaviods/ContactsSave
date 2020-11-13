<?php
namespace Lotaviods\Contacts\Config\Connection;
use PDO;
use Doctrine\ORM\Tools\Setup;
use Doctrine\ORM\EntityManager;
use Doctrine\ORM\Mapping\Driver\SimplifiedXmlDriver;

class ConnectBank
{
    public static function CreateConnection(): PDO
    {

        $connect = new PDO("mysql:host=localhost;dbname=contatos;port=3306;", 'root', 'antena'); 
        $connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $connect;
    }
    public static function EntityManager(){
        $isDevMode = true;
        $proxyDir = null;
        $cache = null;

        $config = Setup::createXMLMetadataConfiguration(array(__DIR__."\..\xml"), $isDevMode);

        $conn = array(
            'driver' => 'pdo_sqlite',
            'path' => __DIR__ . '/var/data/bank.sqlite',
        );
        
        return EntityManager::create($conn, $config);

    }

}
