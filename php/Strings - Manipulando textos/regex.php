<?php

$telefones = ['(51) 98125 - 0935', '(54) 98166 - 6935', '(54) 98982 - 0335','(54) 98125 - 0934'];



foreach ($telefones as $telefone){
    $telefoneValido = preg_match('/^\([0-9]{2}\) 9?[0-9]{4} - [0-9]{4}$/',
        $telefone);
    if($telefoneValido){
        echo "Telefone válido" . PHP_EOL;
    }else {
        echo "Telefone inválido" . PHP_EOL;
    }
}