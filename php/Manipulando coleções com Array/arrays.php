<?php

$notas = [
    1,
    8,
    10,
    9,
    7,
    6
];

$notasOrdenadas = $notas;

sort($notasOrdenadas);

echo "notas ordenadas: \n";
foreach ($notasOrdenadas as $ordenadas){
    echo "$ordenadas \n";
}
echo "notas não ordenadas: \n";
foreach ($notas as $naoOrdenadas){

    echo "$naoOrdenadas \n";
}
