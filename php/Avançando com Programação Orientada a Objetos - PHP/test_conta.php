<?php

require_once 'src/model/autoload.php';

use Alura\marcejo\model\conta;
use Alura\marcejo\model\conta\contaPoupanca;
use Alura\marcejo\model\conta\titular;
use Alura\marcejo\model\endereco;
use Alura\marcejo\model\cpf;
use Alura\marcejo\model\conta\contaCorrente;

$address = new endereco("Porto Alegre","Passo da areia","General Pedro Bittencourt",'233');
$cpf = new cpf('022.917.690-90');
$titular = new titular($cpf,"Marcelo",$address);
$testeConta = new contaPoupanca($titular);

$testeConta->depositarValor(500);
$testeConta->sacarValor(100);

echo $testeConta->recuperaSaldo();