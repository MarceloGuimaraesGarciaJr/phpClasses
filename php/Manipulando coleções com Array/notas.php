<?php
$notas = [
    'João' => 10,
    'Ana' => 5,
    'Maria' =>9,
    'Carlos' =>6,
    'Jobim' => 8
];

krsort($notas);

//ksort ordena pelas chaves de forma alfabética
//rsort ordena de ordem decrescente
//uksort ordena em ordem crescente
//krsort define ordenação por chave e em ordem decrescente
var_dump($notas);

