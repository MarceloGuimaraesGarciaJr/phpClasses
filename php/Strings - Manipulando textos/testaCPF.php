<?php
//Ideia é usar expressões regulares para validar um CPF infomado em um array de cpfs

$cpfs = ["022.917.690-90","000.000.000-002","098.090.123-23"];

echo "Validador de CPF \n";


foreach ($cpfs as $cpf){
    $validaCpf = preg_match("/^[0-9]{3}.[0-9]{3}.[0-9]{3}-[0-9]{2}$/",$cpf,$cpfsValidados);
    if($validaCpf == 1){
        echo "O CPF {$cpf} é válido \n";
    }else{
        echo "O CPF {$cpf} é inválido, favor, verificar. \n";
    }
}