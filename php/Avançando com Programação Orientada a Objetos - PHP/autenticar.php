<?php

require_once 'autoload.php';

use Alura\marcelo\controller\autenticacao;
use Alura\marcelo\model\conta\titular;
use Alura\marcelo\model\endereco;
use Alura\marcelo\model\funcionario\Diretor;
use Alura\marcelo\model\cpf;
use Alura\marcelo\model\funcionario\Gerente;

$diretor = new Diretor('Marcelo Garcia',new cpf('123.472.655-91'),6000);
$titular = new titular(
    new cpf('123.456.789-90'),
    'Marcelo Garcia Júnior',
    new endereco("","","",""));
$gerente = new Gerente('Marcelo',
    new cpf('312.543.887-90'),
    3000);



$autenticar = new autenticacao();

$autenticar->realizaLogin($diretor,1234);
$autenticar->realizaLogin($titular,"abcd");
$autenticar->realizaLogin($gerente,"4234");

