<?php

class titular extends pessoa
{
    private $endereco;

    public function __construct(CPF $cpf, string $nome,endereco $endereco)
    {
        $this->cpf = $cpf;
        $this->nome = $nome;
        $this->endereco = $endereco;
    }

    public function recuperaEndereco(): endereco
    {
        return $this->endereco;
    }
}