<?php
$peso = 83.3;
$altura = 1.73;

$resultado = $peso / ($altura*$altura);

if ($resultado <= 18.5){
    echo "Você está com baixo peso \n";
    echo "Seu IMC é: $resultado";
}elseif ($resultado >=18.6 and $resultado <= 24.9){
    echo "Você está com peso normal \n";
    echo "Seu IMC é: $resultado";
}elseif ($resultado >=25 and $resultado <= 29.9){
    echo "Você está com sobrepeso \n";
    echo "Seu IMC é: $resultado";
}elseif ($resultado >=30 and $resultado <= 34.9){
    echo "Você está com Obesidade grau I \n";
    echo "Seu IMC é: $resultado";
}elseif ($resultado >=35 and $resultado <= 39.9){
    echo "Você está com Obesidade grau II \n";
    echo "Seu IMC é: $resultado";
}else{
    echo "Você está com Obesidade grau II \n";
    echo "Seu IMC é: $resultado";
};

