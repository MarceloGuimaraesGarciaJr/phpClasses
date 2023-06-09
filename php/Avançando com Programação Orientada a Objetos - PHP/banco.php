<?php

 require_once 'src/model/autoload.php';

use Alura\marcejo\model\conta\Conta;
use Alura\marcejo\model\endereco;
use Alura\marcejo\model\conta\titular;
use Alura\marcejo\model\cpf;



$endereco = new endereco("Porto Alegre","Passo da Areia","General Pedro","233");
$marcelo = new titular(new cpf('022.917.690-90'),'Marcelo Garcia',$endereco);
$primeiraConta = new Conta($marcelo);

var_dump($primeiraConta);
$primeiraConta->depositarValor(400);
$primeiraConta->sacarValor(100);
echo "{$primeiraConta->recuperaSaldo()} \n";
$carolina = new titular(new cpf('698.549.548-10'), 'Carolina',$endereco);
$segundaConta = new Conta($carolina);
$outroEndereco = new endereco("A","b","C","D");
$outra = new Conta(new titular(new CPF('123.654.789-01'), 'Abcdefg',$outroEndereco));
unset($segundaConta);
echo Conta::recuperaNumeroDeContas();