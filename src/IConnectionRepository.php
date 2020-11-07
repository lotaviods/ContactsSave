<?php
namespace Lotaviods\Contacts;
interface IConnectionRepository
{
    public function Add($nome, $email);
    public function List();

}
