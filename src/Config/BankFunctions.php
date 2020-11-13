<?php
namespace Lotaviods\Contacts\Config;

use Lotaviods\Contacts\Entity\Contato;
use Lotaviods\Contacts\Config\Connection\ConnectBank;


class BankFunctions
{
    function list() {

        $getManager = new ConnectBank();
        $manager= $getManager->EntityManager();
        $query = $manager->createQuery('SELECT contatos FROM Lotaviods\\Contacts\\Entity\\Contato contatos');
        $list = $query->getResult();

        $cont = 0;
        if (empty($list)){
            echo "Não existe nenhum contato ainda";
        }else{
        foreach ($list as $contatos) {
            $cont = $cont+1;
            echo "\nContato: {$cont} \n\tID : {$contatos->getId()}\n  \tNome: {$contatos->getNome()}\n\tEmail: {$contatos->getEmail()}\n";
        }

    }
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
        $getManager = new ConnectBank();
        $manager= $getManager->EntityManager();
        $connection = $manager->getConnection();
        $platform   = $connection->getDatabasePlatform();
        
        $connection->executeUpdate($platform->getTruncateTableSQL('contacts', true /* whether to cascade */));
    }
}
