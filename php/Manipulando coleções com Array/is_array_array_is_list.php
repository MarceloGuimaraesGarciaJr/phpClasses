<?php
$notas = [
    'Marcelo' => 10,
    'Claudia' => 8,
    'Irene'=> 5,
    'Marijane' => 9,
    'Marcos' => 3,
    'Pedro' => 1
];

krsort($notas);
var_dump($notas);

//Função is_array verifica se a variável é um array
//Função is_list_array verifica se variável é um array de lista


if (is_array($notas))
{
    echo 'Is Array!';
}else{
    echo 'Doest array!';
}

//array_key_exists = verifica se a chave existe
//in_array = verifica se o valor existe
//isset = verifica se o valor existe e é diferente de nulo
/*o parâmetro true no final, acionao strict que deixa === e isso considera o type.*/
//aray_search procura a chave no array pelo valor definido
