<?php

namespace Alura\marcelo\controller;

use Alura\marcelo\model\autenticar;

class autenticacao
{

    public function realizaLogin(autenticar $autenticar, string $senha):void
    {
        if ($autenticar->podeAutenticar($senha)){
            echo "Você está logado \n";
        }else{
            echo "Você não tem permissão de login \n";
        }
    }

}