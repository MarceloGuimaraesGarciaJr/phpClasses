<?php
/*$file = fopen('list-courses.txt','r');
//fopen - abre o arquivo e recebe por enquanto 2 paraâmetros (nome do arquivo, e modo)
while(!feof($file)){
    $curso = fgets($file);

    echo $curso;
}
fclose($file);


Acima le o arquivo linha a linha */
/*
$filename = 'list-courses.txt';
$arquivo = fopen($filename,'r');

$tamanhoArquivo = filesize('list-courses.txt');
echo "{$tamanhoArquivo} \n";

$content = fread($arquivo,$tamanhoArquivo);

fclose($arquivo);

echo $content;

Dessa forma abre o arquivo, le o tamanho e exibe, depois fecha.
*/

$arquivo = 'list-courses.txt';

$cursos = file_get_contents($arquivo);

echo $cursos;

// se usar o file, sem colocar o get contents ele vai listar tudo em um array