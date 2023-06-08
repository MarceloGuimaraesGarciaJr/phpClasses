<?php
require_once 'Conta.php';
require_once 'titular.php';

$primeiraConta = new Conta(new titular('123.456.789-10',"Marcelo Garcia"));
$primeiraConta ->depositar(500);
$primeiraConta -> sacar(100);

$segundaConta = new Conta(new titular('122.456.123-90', 'Marcejo'));


echo "Olá {$primeiraConta->getTitular()} Seu saldo é {$primeiraConta ->extrato()} \n";
echo "{$primeiraConta->getCpf()} \n";
echo "{$primeiraConta->extrato()} \n";
echo Conta::recuperaNumeroContas() .PHP_EOL;
echo Conta::recuperaCodAgencia() .PHP_EOL;
