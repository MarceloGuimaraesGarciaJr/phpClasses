<?php


namespace Alura\marcelo\model\funcionario;


class Desenvolvedor extends funcionario
{
    public function calculaBonificacao(): float
    {
        return $this->recuperaSalario() * 0.05;
    }
}