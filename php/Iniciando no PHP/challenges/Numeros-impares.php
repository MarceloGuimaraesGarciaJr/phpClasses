<?php
//Exibir todos os numeros impares até 100

for ($contador = 1; $contador <= 100; $contador++){
    if ($contador % 2 == 0){
        continue;
    }else{
        echo "O proximo numero impar é $contador \n";
    }
}