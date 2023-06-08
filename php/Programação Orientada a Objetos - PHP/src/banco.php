<?php
require_once 'Conta.php';

$primeiraConta = new Conta('123.456.789-10',"Marcelo Garcia");
$primeiraConta ->depositar(500);
$primeiraConta -> sacar(100);

$segundaConta = new Conta('122.456.123-90', 'Ana');

echo "Olá {$primeiraConta->recuperaNomeTitula()} Seu saldo é {$primeiraConta ->extrato()} \n";
echo "{$primeiraConta->recuperaCpfTitular()} \n";
echo "{$primeiraConta->extrato()} \n";
