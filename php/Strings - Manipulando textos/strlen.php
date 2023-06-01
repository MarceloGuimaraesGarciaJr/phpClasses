<?php
$email = "Marcêlo@n49.com.br";
$senha = "asjdfaskdjhfkh";

echo mb_strlen($senha) . PHP_EOL;

if (mb_strlen($senha) > 8){
    echo "Sua senha é inválida, deve ter no mínimo 8 caracteres \n";
}

$posicaoDoArroba = strpos($email, "@");


$usuario = substr($email, 0, $posicaoDoArroba);

echo mb_strtoupper($usuario . PHP_EOL); //converte em uppercase
echo mb_strtolower($usuario . PHP_EOL);
