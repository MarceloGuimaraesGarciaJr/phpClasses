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