<?php

namespace Alura\marcejo\model\conta;
use Alura\marcejo\model\conta\Conta;

class contaPoupanca extends Conta
{
    public function percentualTarifa():float
    {
        return $percentualTarifa = 0.03;
    }
}