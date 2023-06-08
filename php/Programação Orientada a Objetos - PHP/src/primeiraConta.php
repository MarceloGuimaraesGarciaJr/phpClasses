<?php

require 'Conta.php';

$primeiraConta = new Conta('02291769090','Marcelo Júnior');

$primeiraConta -> sacar(100);
var_dump($primeiraConta);
$primeiraConta -> sacar(200);
var_dump($primeiraConta);


