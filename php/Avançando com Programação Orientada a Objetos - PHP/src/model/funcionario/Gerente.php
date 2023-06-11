<?php

namespace Alura\marcelo\model\funcionario;

class Gerente extends funcionario
{
    public function calculaBonificacao():float
    {
        return $this->recuperaSalario();
    }
}