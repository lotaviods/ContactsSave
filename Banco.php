<?php
require_once './src/ConnectBank.php';
//$connect = ConnectBank::CreateConnection();
$connect = ConnectBank::CreateConnection();
//$connect->exec('CREATE TABLE estudantes (id AUTO_INCREMENT, nome TEXT, idade INT);');

//$pdo = new PDO("sqlite:Banco.sqlite");
//$ADD = "INSERT INTO estudantes (nome, idade ) VALUES ('luiz', '19');";   //Variavel fixa.
//var_dump($connect->exec($ADD));

$value = "INSERT INTO estudantes (nome, idade) VALUES (?, ?);"; // Variavel a ser preparada.
$statement = $connect->prepare($value); // paga o valor da variavel value e passa para o statement.
$statement->bindValue(1, 'luiz'); //substitui o valor do primeiro ?
$statement->bindValue(2, 19); //substitui o valor do segundo ?
$statement->execute();
$all = $connect->query('SELECT * FROM estudantes;')->fetchAll(PDO::FETCH_ASSOC); //Listagem
var_dump($all);
