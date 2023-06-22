<?php

 require_once 'autoload.php';

use Alura\marcelo\model\conta\Conta;
use Alura\marcelo\model\conta\contaCorrente;
use Alura\marcelo\model\conta\contaPoupanca;
use Alura\marcelo\model\endereco;
use Alura\marcelo\model\conta\titular;
use Alura\marcelo\model\cpf;


$endereco = new endereco("Porto Alegre","Passo da Areia","General Pedro","233");
$marcelo = new titular(new cpf('022.917.690-90'),'Marcelo Garcia',$endereco);
$primeiraConta = new contaCorrente($marcelo);

var_dump($primeiraConta);
$primeiraConta->depositarValor(400);
$primeiraConta->sacarValor(100);
echo "{$primeiraConta->recuperaSaldo()} \n";
$carolina = new titular(new cpf('698.549.548-10'), 'Carolina',$endereco);
$segundaConta = new contaCorrente($carolina);
$outroEndereco = new endereco("A","b","C","D");
unset($segundaConta);
echo Conta::recuperaNumeroDeContas();