<?php
//crio array
// posso criar o array também definindo como $variavel = array(dados,dados,dados);
$idadeLista = [21,23,19,25,30,55,18];

for ($i = 0;$i < sizeof($idadeLista);$i++){
    echo "Idade na posição $i é $idadeLista[$i] \n";
}x