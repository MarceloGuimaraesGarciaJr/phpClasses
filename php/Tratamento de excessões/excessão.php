<?php
function funcao1()
{
    echo 'Entrei na função 1' . PHP_EOL;
    funcao2();
    echo 'Saindo da função 1' . PHP_EOL;
}

function funcao2()
{
    echo 'Entrei na função 2' . PHP_EOL;
    try{
        $arrayFixo = new SplFixedArray(2);
        $arrayFixo[3] = 'Valor'; // aqui o array vai além das posições então, um RuntimeError
        $divisao = intdiv(5, 0); //aqui tem um erro de divisão por zero
    }catch(RuntimeException | DivisionByZeroError $e){ //aqui faço um multicatch para pegar ambos erros, o De Runtime e Division... essa opção está disponível só no PHP 7.1+
        //também tens a opção de fazer sem a variável no php 8.2a variável é onde grava o log de erros.
        echo $e->getMessage().PHP_EOL;
        echo $e->getTraceAsString().PHP_EOL;
    }
    for ($i = 1; $i <= 5; $i++) {
        echo $i . PHP_EOL;
    }
    echo 'Saindo da função 2' . PHP_EOL;
}

echo 'Iniciando o programa principal' . PHP_EOL;
funcao1();
echo 'Finalizando o programa principal' . PHP_EOL;