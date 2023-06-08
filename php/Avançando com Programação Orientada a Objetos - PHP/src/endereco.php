<?php

class endereco
{
    private $cidade;
    private $bairro;
    private $rua;
    private $numero;

    public function __construct (string $cidade, string $bairro, string $rua, string $numero)
    {
        $this->numero = $numero;
        $this->rua = $rua;
        $this->bairro = $bairro;
        $this->cidade = $cidade;
    }

    public function getNumero():string
    {
        return $this->numero;
    }

    public function getBairro(): string
    {
        return $this->bairro;
    }

    public function getCidade(): string
    {
        return $this->cidade;
    }
    public function getRua(): string
    {
        return $this->rua;
    }
}