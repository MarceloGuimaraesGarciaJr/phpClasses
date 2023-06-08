<?php

class titular
{
    private $cpf;
    private string $nome;
    private $endereco;

    public function __construct(cpf $cpf, string $nome, endereco $endereco)
    {
        $this->cpf = $cpf;
        $this->nome = $nome;
        $this->endereco = $endereco;
    }

    public function getEndereco(): endereco
    {
        return $this->endereco;
    }

    public function getCpf():string
    {
        return $this->cpf->getCpf();
    }

    public function recuperaNome(): string
    {
        return $this->nome;
    }
    private function validaNomeTitular(string $nomeTitular):void
    {
        if(strlen($nomeTitular)< 5){
            echo "Nome deve ter pelo menos 5 caracteres";
            exit();
        }
    }


}
