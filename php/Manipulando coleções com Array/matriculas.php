<?php

$alunos2021 = [
    'Vinicius',
    'João',
    'Ana',
    'Roberto',
    'Maria',
];

$novosAlunos =[
    'Patrícia',
    'Nico',
    'Kinderson',
    'Daiane'
];

$alunos2022 =[...$alunos2021,...$novosAlunos];


var_dump($alunos2022);

//array merge vai unir os arrays,mas não vai preservar as chaves. se as chaves forem as mesmas em algum dos casos, ele vai pegar apenas o último declarado sobreescrevendo os elementos. caso ele seja STRING
// o + (soma dos arrays) vai desconsiderar se existem as chaves já criadas. no exemplo O vinícius vai ficar no indice 0 apagando a patrícia e assmi por diante.
//adicionando ... antes do nome do array, ele desempacota e ele vai dar a opção de adicionar elementos diretamente nos arrays.
//Spread operator também é apresentado pelos ... ele une vários argumentos de uma função em um elemento único.


