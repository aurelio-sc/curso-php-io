<?php

$contexto = stream_context_create([
    'zip' => [
        'password' => '1234'
    ]
    ]);

echo file_get_contents('zip://senha1234.zip#lista-cursos.txt', false, $contexto);

echo PHP_EOL.'---------------------'.PHP_EOL;

//context também pode ser aplicado no método fopen():
$arquivo = fopen('zip://senha1234.zip#lista-cursos.txt', 'r', false, $contexto);
echo fread($arquivo, filesize('senha1234.zip'));
fclose($arquivo);
