<?php

class titular extends pessoa
{
    private $endereco;

    public function __construct(CPF $cpf, string $nome,endereco $endereco)
    {
        parent::__construct($nome,$cpf);
        $this->endereco = $endereco;
    }

    public function recuperaEndereco(): endereco
    {
        return $this->endereco;
    }
}