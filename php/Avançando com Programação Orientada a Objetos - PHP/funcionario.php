<?php

require_once 'autoload.php';

use Alura\marcelo\model\funcionario\funcionario;
use Alura\marcelo\controller\controladorDeBonificacoes;
use Alura\marcelo\model\cpf;
use Alura\marcelo\model\funcionario\Diretor;
use Alura\marcelo\model\funcionario\Gerente;
use Alura\marcelo\model\funcionario\Desenvolvedor;

$umFuncionario = new Desenvolvedor("Marcelo", new cpf("123.456.789-10"),"Desenvolvedor", 5000);
$tresFuncionario = new Diretor("Ana Paula",new cpf('123.654.229-15'),"Diretora",6000);
$doisFuncionario = new Gerente("Shana Muller",new cpf('123.456.789-11'),"Gestora",3000);

$controlador = new controladorDeBonificacoes();
$controlador->adicionaBonificacaoDe($umFuncionario);
$controlador->adicionaBonificacaoDe($doisFuncionario);
$controlador->adicionaBonificacaoDe($tresFuncionario);

echo "{$controlador->recuperaBonificacoes()}\n";
