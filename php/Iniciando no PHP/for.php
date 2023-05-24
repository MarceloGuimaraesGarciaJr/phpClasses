<?php
//instrução do loop for
/*Como escrever o for para adicionar no contador ou qualquer variável de controle
contador = contador +1;
contador += 1;
ou contador ++;
For serve para quando a gente tem um loop com limite.
É realizado um if para pular o 13 com o parâmetro continue, para pular a interação do loop for
*/

for ($contador = 1; $contador<=15 ; $contador++){
    if ($contador == 13){
        continue;
    }else{
        echo "#$contador" . PHP_EOL;
    }
}