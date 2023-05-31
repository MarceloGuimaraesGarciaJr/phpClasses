<?php
$alunos2021 = [
    'Vinicius',
    'João',
    'Ana',
    'Roberto',
    'Maria',
];

$novosAlunos =[
    'Patrícia',
    'Nico',
    'Kinderson',
    'Daiane'
];

echo array_push($novosAlunos, 'Marcelo','Anderson','Rocheli') . PHP_EOL; //Adiciona elementos no array
echo array_unshift($novosAlunos, 'Marcelos'). PHP_EOL;
echo array_pop($novosAlunos). PHP_EOL;
var_dump($novosAlunos);