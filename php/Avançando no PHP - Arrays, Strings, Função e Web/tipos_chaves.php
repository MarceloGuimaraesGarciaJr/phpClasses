<?php

//PHP só trabalha com string ou integer booleano e float não funcionam
//https://www.php.net/manual/pt_BR/language.types.array.php
$array = [
    1 => 'a',

];

foreach ($array as $item){
    echo $item . PHP_EOL;
}