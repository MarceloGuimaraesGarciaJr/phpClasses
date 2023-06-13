<?php

//$arquivo = fopen('cursos-lista.txt', 'a+');
$curso = "Design Patterns em PHP \n";
/*
fwrite($arquivo,$curso);

fclose($arquivo);
*/
// como fazer isso de forma mais fácil

file_put_contents('cursos-lista.txt',$curso, FILE_APPEND);


