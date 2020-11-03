<?php
class ConnectBank
{
    public static function CreateConnection(): PDO
    {
        return $connect = new PDO("sqlite:Banco.sqlite"); //Faz a conexão do banco

    }

}
