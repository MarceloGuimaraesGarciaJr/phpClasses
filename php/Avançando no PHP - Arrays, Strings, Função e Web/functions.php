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
/* o & comercial vai informar que está recebendo uma referencia, que é exatamente a variável original e não uma cópia. é como se pegassemos a xícara de café e enchesse as duas a da variável original e a que estamos
trabalhando do mesmo tempo. usando como valor é uma cópia, então ele vai encher a cópia e não vai alterar a variável original.
*/
function extractMaiuscula(&$conta){
    $conta['titular'] =  strtoupper($conta['titular']);
}

function removerConta($conta){
    unset($conta);
}