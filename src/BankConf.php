<?php
class BankConf implements IConnectionRepository
{
    public $nome;
    public function CreateTable(string $nome)
    {
        $connect = ConnectBank::CreateConnection();
        $this->nome = $nome;
        $connect->exec('CREATE TABLE ' . "$nome" . ' (id AUTO_INCREMENT);');
    }
    public function AddColum($table, $Add)
    {
        $connect = ConnectBank::CreateConnection();
        $connect->exec('ALTER TABLE ' . "$table " . 'ADD ' . "$Add");
    }
    public function fetchAll($table)
    {
        $connect = ConnectBank::CreateConnection();
        $all = $connect->query('SELECT * FROM ' . "$table ;")->fetchAll(PDO::FETCH_ASSOC);
        var_dump($all);
    }
    public function Add($table, $colum, $val)
    {
        $connect = ConnectBank::CreateConnection();
        $value = "INSERT INTO $table ($colum) VALUES (?);"; // Variavel a ser preparada.
        $statement = $connect->prepare($value); // paga o valor da variavel value e passa para o statement.
        $statement->bindValue(1, "$val"); //substitui o valor do primeiro ? 
        $statement->execute();
    }
}
