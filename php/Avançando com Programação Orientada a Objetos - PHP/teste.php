<?php
require_once "autoload.php";

use Alura\marcelo\model\conta\titular;
use Alura\marcelo\model\cpf;
use Alura\marcelo\model\endereco;
$endereco = new endereco('Porto Alegre',"General Pedro","General","233");
$titula = new titular(new cpf('022.917.590-90'),'Marcelo Garcia',$endereco);


var_dump($titula->recuperaNome());