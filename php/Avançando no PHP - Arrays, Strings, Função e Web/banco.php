<?php

//Require vai garantir o arquivo para executar o programa, vai dar erro no inicio do programa
//Include vai incluir, porém, não vai deixar de executar
//ele vai dar erro apenas quando chamar a primeira função ou item necessário, no caso do exemplo é o sacar ou o depositar.
//require_once vai verificar se o arquivo já foi incluido, se foi, ele vai conntinuar a execução e naõ carregar duplicado.

require 'functions.php';

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

$contasCorrentes['123.456.789-10'] = sacar($contasCorrentes['123.456.789-10'],500);
$contasCorrentes['123.256.789-12'] = depositar($contasCorrentes['123.256.789-12'],0);

foreach ($contasCorrentes as $cpf => $conta) {
    exibeMensagem("O saldo da conta{$cpf} do títular {$conta['titular']} é: {$conta['saldo']}");
}

