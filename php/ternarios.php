<?php
//OR || AND &&
// Se retiradas as chaves, ele reconhece uma linha de instrução, tornando ternário... mais de uma linha ele vai dar erro.
//Abaixo tem um exemplo do código com chaves.

// Operador ternário funciona da mesma forma que em outras linguagens $variavel = $condicao ? $valorSeVerdadeiro : $valorSeFalso;
$idade = 18;
$numeroDePessoas = 2;
echo "Você só pode entrar se tiver mais de 18 anos " . PHP_EOL;
echo "a partir de 16 anos acompanhado(a)". PHP_EOL;

if ($idade >= 18 )
    echo  "Você tem $idade pode entrar";
else if($idade >= 16 && $numeroDePessoas > 1)
    echo "Você tem $idade anos e está acompanhado(a)" . PHP_EOL;
else
    echo  "Você não tem idade suficiente";


/*
//OR || AND &&

$idade = 18;
$numeroDePessoas = 2;
echo "Você só pode entrar se tiver mais de 18 anos " . PHP_EOL;
echo "a partir de 16 anos acompanhado(a)". PHP_EOL;

if ($idade >= 18 ){
    echo  "Você tem $idade pode entrar";
}else if($idade >= 16 && $numeroDePessoas > 1){
        echo "Você tem $idade anos e está acompanhado(a)" . PHP_EOL;
}else{
    echo  "Você não tem idade suficiente";
}*/