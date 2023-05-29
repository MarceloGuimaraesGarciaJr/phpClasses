<?php
$conta1 = [
    'nome' => 'Marcelo',
    'valor'=> 4000.00,
];
$conta2 = [
    'nome' => 'Vanessa',
    'valor'=> 14000.00,
];
$conta3 = [
    'nome' => 'Alberto',
    'valor'=> 24000.00,
];

$contasCorrentes = [$conta1,$conta2, $conta3];

for ($i = 0; $i < count($contasCorrentes); $i++){
    echo $contasCorrentes[$i]['nome'] . "\n";
}

