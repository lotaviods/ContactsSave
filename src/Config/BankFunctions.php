<?php
namespace Lotaviods\Contacts\Config;

use Lotaviods\Contacts\Config\Connection\ConnectBank;
use Lotaviods\Contacts\Contato;

class BankFunctions
{
    public $nome;
    public $connect;

    function list() {

        $getManager = new ConnectBank();
        $manager= $getManager->EntityManager();

        



        /*$all = "SELECT * FROM contacts";
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
    */
}
    public function Add($nome, $email)
    {   
        $Contato = new Contato;
        $Contato->setNome($nome);
        $Contato->setEmail($email);

        $getManager = new ConnectBank();
        $manager= $getManager->EntityManager();

        $manager->persist($Contato);
        $manager->flush();

    }
    public function DelAll()
    {
        $sql = "TRUNCATE TABLE contacts";
        $stmt = $this->connect->prepare($sql);
        $stmt->execute();
    }
}
