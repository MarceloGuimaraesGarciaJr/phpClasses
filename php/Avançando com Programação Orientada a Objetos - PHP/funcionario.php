<?php

require_once 'autoload.php';

use Alura\marcejo\controller\controladorDeBonificacoes;
use Alura\marcejo\model\{funcionario,cpf};


$umFuncionario = new funcionario("Marcelo Garcia",new cpf('123.456.789-10'),"Gestor",2000);
$doisFuncionario = new funcionario("Shana Muller",new cpf('123.456.789-11'),"Gestora",3000);

$controlador = new controladorDeBonificacoes();
$controlador->adicionaBonificacaoDe($umFuncionario);
$controlador->adicionaBonificacaoDe($doisFuncionario);
$salarioFuncionarioUm= $umFuncionario->recuperaSalario();


echo "{$controlador->recuperaBonificacoes()}\n";

echo "{$umFuncionario->recuperaSalario()}";

echo "{$umFuncionario->recuperaSalario()} {$doisFuncionario->recuperaSalario()} \n";