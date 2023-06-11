<?php

namespace Alura\marcelo\model\funcionario;

use Alura\marcelo\model\autenticar;

class Gerente extends funcionario implements autenticar
{
    public function calculaBonificacao():float
    {
        return $this->recuperaSalario();
    }
    public function podeAutenticar(string $senha): bool
    {
        return $senha ==='3333';
    }
}