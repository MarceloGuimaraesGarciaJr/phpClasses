<?php

namespace Alura\marcelo\model;
use Alura\marcelo\model\cpf;

class pessoa
{
   protected $nome;
   protected $cpf;

    public function __construct(string $nome, cpf $cpf)
    {
        $this->validaNome($nome);
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

    final protected function validaNome(string $nomeTitular):void
    {
        if (strlen($nomeTitular) < 5) {
            echo "Nome precisa ter pelo menos 5 caracteres";
            exit();
        }
    }

}