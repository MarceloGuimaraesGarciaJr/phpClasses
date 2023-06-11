<?php

namespace Alura\marcelo\controller;

use Alura\marcelo\model\funcionario\funcionario;

class controladorDeBonificacoes
{
    private $totalBonificacoes = 0;
    public function adicionaBonificacaoDe(funcionario $funcionario)
    {
        $this->totalBonificacoes += $funcionario->calculaBonificacao();
    }

    public function recuperaBonificacoes(): float
    {
        return $this->totalBonificacoes;
    }

}