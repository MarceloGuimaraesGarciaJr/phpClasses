<?php

class titular
{
    private $cpf;
    private string $nome;

    public function __construct(cpf $cpf, string $nome)
    {
        $this->cpf = $cpf;
        $this->nome = $nome;
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
