<?php
//Função lista cria varia´veis separadas de um array, é um "tupla" no PHP

$dados = ['Marcelo',10,28];
[$nome,$nota,$idade] = $dados; // No PHP 8.1

list($nome,$nota,$dados) = $dados; //php 7+

$dados = [
    'nome' => 'Marcelo',
    'nota' => 10,
    'idade' => 24,
];

['nome' => $nome, 'nota' => $nota, 'idade' => $idade] = $dados; // o list usa por padrão o indexador em interos, caso exista uma chave
//ela deve ser informada no inicio. porém, a sintaxe como escrita é suportada no php 8+, no 7+ precisa colocar o list() para criar a lista. "Tupla"
