<?php
var_dump($_FILES);

$file = move_uploaded_file($_FILES['arquivo'],['tmp_name'],__DIR__ . '/a');

if($file == true){
    echo "Arquivo recebido";
}else{
    echo "FAIO";
}