<?php

require_once 'autoload.php';

use Alura\marcelo\model\funcionario\funcionario;
use Alura\marcelo\controller\controladorDeBonificacoes;
use Alura\marcelo\model\cpf;
use Alura\marcelo\model\funcionario\Diretor;
use Alura\marcelo\model\funcionario\Gerente;
use Alura\marcelo\model\funcionario\Desenvolvedor;
use Alura\marcelo\model\funcionario\editorVideo;

$umFuncionario = new Desenvolvedor("Marcelo", new cpf("123.456.789-10"), 5000);
$tresFuncionario = new Diretor("Ana Paula",new cpf('123.654.229-15'),9000);
$doisFuncionario = new Gerente("Shana Muller",new cpf('123.456.789-11'),7000);
$umEditor = new editorVideo("Tereza Fernanda",new cpf('122.333.545-39'),4000);
$umFuncionario->sobeNivel();

$controlador = new controladorDeBonificacoes();
$controlador->adicionaBonificacaoDe($umFuncionario);
$controlador->adicionaBonificacaoDe($doisFuncionario);
$controlador->adicionaBonificacaoDe($tresFuncionario);
$controlador->adicionaBonificacaoDe($umEditor);


echo "{$controlador->recuperaBonificacoes()}\n";
