<?php
$url = 'https://alura.com.br';

if (str_starts_with($url, 'https')){
    echo "é uma URL Segura";
}else{
    echo "Não é uma URL segura";
}

echo PHP_EOL;

if(str_ends_with($url, 'br/')){
    echo "É um domínio do BR";
}else{
    echo "Não é um domínio do Brasil";
}