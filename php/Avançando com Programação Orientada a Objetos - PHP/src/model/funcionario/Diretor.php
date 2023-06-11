<?php

namespace Alura\marcelo\model\funcionario;


class Diretor extends funcionario
{
    public function calculaBonificacao():float
    {
        return $this->recuperaSalario() * 2;
    }

    public function autenticar(string $senha):bool
    {
        return $senha == "1234";
    }
}