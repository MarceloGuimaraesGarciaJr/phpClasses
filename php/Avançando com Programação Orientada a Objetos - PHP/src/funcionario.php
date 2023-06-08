<?php

class funcionario
{

    private $nome;
    private $cpf;
    private $cargo;

    public function __construct(string $nome, cpf $cpf, string $cargo)
    {
        $this->nome = $nome;
        $this->cpf = $cpf;
        $this->cargo = $cargo;
    }

    public function getNome(): string
    {
        return $this->nome;
    }

    public function getCargo(): string
    {
        return $this->cargo;
    }



}