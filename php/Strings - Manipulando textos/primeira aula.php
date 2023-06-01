<?php
$nome = 'Marcelo Guimarães Garcia Júnior';

$ehDaMinhaFamilia = (str_contains($nome, 'Garscia'));

if ($ehDaMinhaFamilia){
    echo "$nome é da minha familia" . PHP_EOL;
} else{
    echo "$nome não é da minha familia" . PHP_EOL;
}





