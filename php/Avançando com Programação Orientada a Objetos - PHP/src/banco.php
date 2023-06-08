<?php
require_once 'Conta.php';
require_once 'titular.php';
require_once 'cpf.php';

$cpfMarcelo = new cpf("123.456.789-10");
$marcelo = new titular($cpfMarcelo,"Marcelo Garcia");
$primeiraConta = new Conta($marcelo);
$primeiraConta ->depositar(500);
$primeiraConta -> sacar(100);


echo "Olá {$primeiraConta->getTitular()} Seu saldo é {$primeiraConta ->extrato()} \n";
echo "{$primeiraConta->getCpf()} \n";
echo "{$primeiraConta->extrato()} \n";
echo Conta::recuperaNumeroContas() .PHP_EOL;
echo Conta::recuperaCodAgencia() .PHP_EOL;
