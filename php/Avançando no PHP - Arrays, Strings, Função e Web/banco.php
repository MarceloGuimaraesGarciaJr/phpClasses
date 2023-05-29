<?php

/*Require vai garantir o arquivo para executar o programa, vai dar erro no início do programa
Include vai incluir, porém, não vai deixar de executar
ele irá dar erro apenas quando chamar a primeira função ou item necessário, no caso do exemplo é o sacar ou o depositar.
require_once vai verificar se o arquivo já foi incluido, se foi, ele vai conntinuar a execução e naõ carregar duplicado.
*/
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

/*$contasCorrentes['123.456.789-10'] = sacar($contasCorrentes['123.456.789-10'],500);
$contasCorrentes['123.256.789-12'] = depositar($contasCorrentes['123.256.789-12'],0);
extractMaiuscula($contasCorrentes['123.256.789-12']);*/

/*//foreach com array direta, sem uso de list
foreach ($contasCorrentes as $cpf => $conta) {
    exibeMensagem("O saldo da conta $cpf do títular {$conta['titular']} é: {$conta['saldo']}");
}

// nesse for earch o list passa os índices para as variáveis, e grava no conta facilitando no exemplo o uso dos strings
foreach ($contasCorrentes as $cpf => $conta){
    list('titular' => $titular, 'saldo' => $saldo) = $conta;
    exibeMensagem("A Conta $cpf do(a) $titular tem saldo: $saldo");

}

foreach ($contasCorrentes as $cpf => $conta){
    ['titular' => $titular, 'saldo' => $saldo] = $conta; //Nesse caso é o list resumido. essa função está disponível no PHP 7.1 para cima.
    exibeMensagem("A Conta $cpf do(a) $titular tem saldo: $saldo");

}*/
?>
<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Banco</title>
</head>

<body>
    <h1>Listagem de contas</h1>

    <dl>
        <?php
            foreach ($contasCorrentes as $cpf => $contas){?>
                <dt><h3><?php echo $contas['titular']; ?> - <?php echo $cpf; ?></h3></dt>
                <dd><?php echo "Saldo: {$contas['saldo']}"; ?> </dd>
            <?php } ?>
    </dl>
</body>
</html>
