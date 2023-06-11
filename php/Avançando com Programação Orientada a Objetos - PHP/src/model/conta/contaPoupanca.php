<?php

namespace Alura\marcelo\model\conta;
use Alura\marcelo\model\conta\Conta;

class contaPoupanca extends Conta
{
    public function percentualTarifa():float
    {
        return $percentualTarifa = 0.03;
    }
}