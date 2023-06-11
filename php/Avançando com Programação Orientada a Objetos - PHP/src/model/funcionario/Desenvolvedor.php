<?php


namespace Alura\marcelo\model\funcionario;


class Desenvolvedor extends funcionario
{
    public function calculaBonificacao(): float
    {
      return 500;
    }

    public function sobeNivel()
    {
        return $this->recebeAumento($this->recuperaSalario()*0.75);
    }

}