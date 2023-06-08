<?php

class titular
{
    private $cpf;
    private $nome;

    public function __construct(string $cpf, string $nome)
    {
        $this->cpf = $cpf;
        $this->nome = $nome;
    }

    public function recuperaCpf(): string
    {
        return $this->cpf;
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
