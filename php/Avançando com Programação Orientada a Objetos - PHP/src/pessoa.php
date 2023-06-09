<?php

class pessoa
{
   protected $nome;
   protected $cpf;

    public function __construct(string $nome, cpf $cpf)
    {
        $this->validaNomeTitular($nome);
        $this->nome = $nome;
        $this->cpf = $cpf;
    }
    public function recuperaNome(): string
    {
        return $this->nome;
    }

    public function recuperaCpf()
    {
        return $this->cpf->getCpf();
  }

    protected function validaNomeTitular(string $nomeTitular)
    {
        if (strlen($nomeTitular) < 5) {
            echo "Nome precisa ter pelo menos 5 caracteres";
            exit();
        }
    }

}