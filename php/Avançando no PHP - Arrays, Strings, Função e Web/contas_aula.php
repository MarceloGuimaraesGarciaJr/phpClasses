<?php


function exibeMensagem($mensagem){
    echo $mensagem . PHP_EOL;
}



$contasCorrentes = [
    '123.456.789-10' => [
        'titular' => 'Maria',
        'saldo' => 10000
    ],
    '123.456.689-11' => [
        'titular' => 'Alberto',
        'saldo' => 1000
    ],
    '123.256.789-12' => [
        'titular' => 'Vinicius',
        'saldo' => 100
    ]
];
if (500 > $contasCorrentes['123.456.789-10']['saldo']){
    exibeMensagem("Você não tem esse saldo");
} else
{
    $contasCorrentes['123.456.789-10']['saldo'] -= 500;
}

if (500 > $contasCorrentes['123.456.689-11']['saldo']){
    exibeMensagem("Você não tem esse saldo");
} else
{
    $contasCorrentes['123.456.689-11']['saldo'] -= 500;
}

if (500 > $contasCorrentes['123.256.789-12']['saldo']){
    exibeMensagem("Você não tem esse saldo");
} else
{
    $contasCorrentes['123.256.789-12']['saldo'] -= 500;
}


foreach ($contasCorrentes as $cpf => $conta) {
    exibeMensagem($cpf . " " . $conta['titular'] . " "."R$ " . $conta['saldo']);
}

