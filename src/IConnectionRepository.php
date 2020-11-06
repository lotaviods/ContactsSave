<?php
namespace Lotaviods\bank;
interface IConnectionRepository
{
    public function Add($nome, $email);
    public function List();

}