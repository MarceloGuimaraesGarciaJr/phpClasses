<?php

require 'src/pessoa.php';
require 'src/cpf.php';
require 'src/funcionario.php';

$newFuncionario = new funcionario("Marcelo",new cpf('022.917.690-90'),"Developer");

var_dump($newFuncionario);