<?php

require_once 'src/Conta.php';
require_once 'src/endereco.php';
require_once 'src/titular.php';
require_once 'src/cpf.php';

$endereco = new endereco("Porto Alegre","Passo da Areia","General Pedro","233");
$marcelo = new titular(new CPF('123.456.789-10'), 'Marcelo Garcia',$endereco);
$primeiraConta = new Conta($marcelo);
$primeiraConta->deposita(500);
$primeiraConta->saca(300); // isso é ok

echo $primeiraConta->recuperaNomeTitular() . PHP_EOL;
echo $primeiraConta->recuperaCpfTitular() . PHP_EOL;
echo $primeiraConta->recuperaSaldo() . PHP_EOL;

$carolina = new titular(new cpf('698.549.548-10'), 'Carolina',$endereco);
$segundaConta = new Conta($carolina);
var_dump($segundaConta);

$outroEndereco = new endereco("A","b","C","D");
$outra = new Conta(new titular(new CPF('123.654.789-01'), 'Abcdefg',$outroEndereco));
unset($segundaConta);
echo Conta::recuperaNumeroDeContas();