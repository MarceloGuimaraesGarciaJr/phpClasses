<?php
$contexto = stream_context_create([
    'http'=>[
        'method' => 'POST',
        'header' => "X-From:PHP\r\nContent-Type:text/plain",
        'content'=>'Marcelo Garcia Júnior',
    ]

]);

echo file_get_contents('http://httpbin.org/post',false,$contexto);