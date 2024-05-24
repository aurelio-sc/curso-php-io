<?php

$contexto = stream_context_create([
   'http' => [
       'method' => 'POST',
       'header' => "X-FROM: PHP\r\nContent-type: text/plain\r\n",
       'content' => 'Teste do corpo'
   ]
]);

echo file_get_contents('http://httpbin.org/post', false, $contexto);