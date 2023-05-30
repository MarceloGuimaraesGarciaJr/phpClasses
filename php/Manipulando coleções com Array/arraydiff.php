<?php

$notasBimestre1 = [
    'Vinicius' => 6,
    'João' => 7,
    'Ana' => 10,
    'Roberto' => 7,
    'Maria' =>9,
];

$notasBimestre3 = [
    'João' => 7,
    'Ana' => 10,
    'Roberto' => 7,
];

$alunosFaltantes = (array_diff_key($notasBimestre1, $notasBimestre3)); //nesse cenário ele vai ignorar as chaves, então, se a nota for diferente a chave vai se manter a mesma
/*array_diff vai mostrar as diferenças entre os valores
array_diff_key vai mostrar as difrenças entre chaves
array_diff_assoc vai mostrar considerado a chave e o valor, no caso nome do aluno e nota.
uassoc vai associar uma função para fazer, assim tu cria a função e dá instruç~]oes para o PHP fazer a associação*/

var_dump(array_keys($alunosFaltantes));