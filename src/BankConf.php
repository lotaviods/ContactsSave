<?php
namespace Lotaviods\Contacts;
use Lotaviods\Contacts\IConnectionRepository;
use PDO;

class BankConf implements IConnectionRepository
{
    public $nome;
    public $connect;
    public function __construct(PDO $connect)

    {
        $this->connect = $connect;
    }
    function list() {
        $all = "SELECT * FROM contacts";
        $result = $this->connect->prepare($all);
        $result->execute();

        if (empty($result->fetchAll()) != true) {
            $result->execute();
            foreach ($result->fetchAll() as $contatos) {
                echo "Contato {$contatos['id']} : Nome : {$contatos['nome']} Email: {$contatos['email']} \n";

            }
        } else {
            echo "Não existe nenhum contato";
        }
    }
    public function Add($nome, $email)
    {
        $value = "INSERT INTO contacts (nome, email) VALUES (?, ?);"; // Variavel a ser preparada.
        $statement = $this->connect->prepare($value); // paga o valor da variavel value e passa para o statement.
        $statement->bindValue(1, "$nome"); //substitui o valor do primeiro ?
        $statement->bindValue(2, "$email");
        var_dump($statement->execute());
        //var_dump($statement->execute());
    }
    public function DelAll()
    {
        $sql = "TRUNCATE TABLE contacts";
        $stmt = $this->connect->prepare($sql);
        $stmt->execute();
    }
}
