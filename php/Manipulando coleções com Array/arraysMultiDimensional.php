<?php

$notas = [
    [
        'Aluno' => 'Marcelo',
        'Nota' => 10,
    ],
    [
        'Aluno' => 'Ana',
        'Nota' => 6,
    ],
    [
        'Aluno' => 'Carlos',
        'Nota' => 4,
    ]

];

function ordenaNotas(array $nota1, array $nota2): int{
    if($nota1['Nota'] > $nota2['Nota']){
        return -1;
    }
    if($nota1['Nota'] < $nota2['Nota']){
        return 1;
    }
    return 0;
}

usort($notas,'ordenaNotas');

foreach ($notas  as $notasOrdenadas){
    echo "Nota {$notasOrdenadas['Nota']} \n";
}
