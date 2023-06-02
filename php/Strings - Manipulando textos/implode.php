<?php

$telefones = ['(54) 98125-0935','(54) 98125-0932','(54) 98125-0936'];

echo implode(", ", $telefones) . PHP_EOL; // o terceiro parâmetro tantdo do explode como implode é o limite. Se limitar a 2 por exemplo
// ele vai mostrar a posição 0 e 1 e depois agrupar tudo no item 2 independente de numero de objetos no array.


