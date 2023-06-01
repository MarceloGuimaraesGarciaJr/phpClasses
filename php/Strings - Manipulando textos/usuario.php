<?php
$email = "marcelo@n49.com.br";
$posicaoDoArroba = 0;

$posicaoDoArroba = strpos($email, '@');



echo substr($email,0,$posicaoDoArroba) . "\n"; //extrai partes de um string. aponta onde começa e onde termina.
echo substr($email,$posicaoDoArroba +1 );


