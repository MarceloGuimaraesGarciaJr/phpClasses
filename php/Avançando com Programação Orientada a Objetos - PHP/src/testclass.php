<?php

require 'pessoa.php';
require 'cpf.php';
require 'funcionario.php';

$newFuncionario = new funcionario("Marcelo",new cpf('022.917.690-90'),"Developer");

var_dump($newFuncionario);