<?php
$conta1 = [
    'titular' => 'Marcelo',
    'valor'=> 4000.00,
];
$conta2 = [
    'titular' => 'Vanessa',
    'valor'=> 14000.00,
];
$conta3 = [
    'titular' => 'Alberto',
    'valor'=> 24000.00,
];
$conta4 = [
    'titular' => 'Albertos',
    'valor'=> 240000.00,
];
$contasCorrentes = [
    "02291769090" => $conta1,
    "02291769092" => $conta2,
    "02291769095" => $conta3
];

$contasCorrentes["12345678910"] = $conta4;
foreach ($contasCorrentes as $cpf => $conta) {
    echo  "A conta do " . $cpf . " é " . $conta['titular'] ."\n";
}
