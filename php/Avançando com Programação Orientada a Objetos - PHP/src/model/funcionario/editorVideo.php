<?php

namespace Alura\marcelo\model\funcionario;

use Alura\marcelo\model\funcionario\funcionario;

class editorVideo extends funcionario
{

    public function calculaBonificacao(): float
    {
        return 600;
    }
}