<?php
$dados = [
    'nome' => 'Marcelo',
    'nota' => 10,
    'idade' => 24,
];

extract($dados); //cria variáveis, baseadas nas chaves de um array.

$reconstruida = compact('nome','nota','idade'); //pega as variáveis e compacta em um array


var_dump($nome,$nota,$idade);

var_dump($reconstruida);