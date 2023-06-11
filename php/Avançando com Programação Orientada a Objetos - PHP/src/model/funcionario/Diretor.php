<?php

namespace Alura\marcelo\model\funcionario;


use Alura\marcelo\model\autenticar;

class Diretor extends funcionario implements autenticar
{
    public function calculaBonificacao():float
    {
        return $this->recuperaSalario() * 2;
    }

    public function podeAutenticar(string $senha):bool
    {
        return $senha == "1234";
    }
}