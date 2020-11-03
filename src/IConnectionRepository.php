<?php
interface IConnectionRepository
{
    public function CreateTable(string $nome);
    public function fetchAll($table);
    public function AddColum($table, $Add);
    public function Add($table, $colum, $val);
}
interface IStudentRepository
{
    public function fetchAll($table);
    public function Add($Student);
}