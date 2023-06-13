<?php

$arquivoUm = file('course-list.txt');
$arquivoDois = file('cursos-lista.txt');
$csv = fopen('cursoss.csv','w');

foreach ($arquivoUm as $cursos){
    $linha = [trim(utf8_decode($cursos)), "sim"];

    fputcsv($csv,$linha,';');
}

foreach ($arquivoDois as $cursos){
    $linha = [trim(utf8_decode($cursos)), "sim"];

    fputcsv($csv,$linha,';');
}