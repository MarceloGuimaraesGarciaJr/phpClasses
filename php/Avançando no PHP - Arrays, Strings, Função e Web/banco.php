<?php


function exibeMensagem($mensagem){
    echo $mensagem . PHP_EOL;
}

function sacar($conta,$valor){
    if ($valor > $conta['saldo']){
        exibeMensagem("Você não tem esse saldo");
    } else
    {
        $conta['saldo'] -= $valor;
    }
    return $conta;

}
function depositar($conta, float $valorADepositar){
    if($valorADepositar > 0 ){
        $conta['saldo'] += $valorADepositar;
    }else{
        exibeMensagem("Somente valores positivos");

}
    return $conta;
};
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
    exibeMensagem($cpf . " " . $conta['titular'] . " "."R$ " . $conta['saldo']);
}

