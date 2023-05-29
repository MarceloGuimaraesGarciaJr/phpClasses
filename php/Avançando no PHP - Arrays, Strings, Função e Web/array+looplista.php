<?php
//crio array
// posso criar o array também definindo como $variavel = array(dados,dados,dados);
$idadeLista = [21,23,19,25,30,55,18];

list($idadeVinicius,$idadeJoao,$idadeMaria) = $idadeLista;

foreach ($idadeLista as $idade){
    echo $idade . PHP_EOL;
}

exit();
for ($i = 0;$i < sizeof($idadeLista);$i++){
    echo "Idade na posição $i é $idadeLista[$i] \n";
}