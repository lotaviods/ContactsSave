<?php
namespace Lotaviods\Contacts\Entity;
/** 
 * @Entity
 * @Table(name="contacts")
 */
class Contato {
    /** 
     * @Id
     * @GeneratedValue
     * @Column(type="integer")
     */
    private $id;
    /** 
     * @Column(type="string")
     */ 
    private $nome;
    /** 
     * @Column(type="string")
     */
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

