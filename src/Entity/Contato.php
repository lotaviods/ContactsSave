<?php
namespace Lotaviods\Contacts\Entity;



class Contato {
    private $id;
    private $nome;
    private $email;
    
    public function getNome()
    {
        return $this->nome;
    }


    public function setNome($nome)
    {
        $this->nome = $nome;

        return $this;
    }

    public function getEmail()
    {
        return $this->email;
    }


    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    public function getId()
    {
        return $this->id;
    }

}
