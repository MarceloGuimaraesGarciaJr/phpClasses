<?php

require_once "autoload.php";

use Alura\marcelo\model\endereco;

$umEndereco = new endereco('Porto Alegre','Passo da Areia','Iguatemi','1');


$doisEndereco = new endereco('Porto Alegre','Passo da Areia','Iguatemi','4');

$doisEndereco->numero = 10;

echo $doisEndereco;

echo $doisEndereco->cidade;

echo $umEndereco;