<?php

namespace Alura\marcejo\model\conta;

use Alura\marcejo\model\conta\Conta;

class contaCorrente extends Conta
{

    public function transfere(float $valorATransferir, Conta $contaDestino): void
    {
        if ($valorATransferir > $this->saldo) {
            echo "Saldo indisponível";
            return;
        }

        $this->sacarValor($valorATransferir);
        $contaDestino->depositarValor($valorATransferir);
    }

    public function percentualTarifa(): float
    {
        return $percentualTarifa = 0.05;
    }
}