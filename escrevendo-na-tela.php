<?php

$tela = fopen('php://stdout', 'w'); //stdout escreve na saída padrão.
$outraTela = fopen('php://stderr', 'w'); //stderr escreve na saída de erro.
fwrite($tela, 'Hello World!');
fwrite($outraTela, 'Hello New World!');
fclose($tela);

//Alternativa mais concisa:
fwrite(STDOUT, 'Hello World!');
fwrite(STDERR, 'Hello New World!');

//Movendo de uma stream para outra (nesse caso, de um arquivo para a tela):
$cursos = fopen('zip://arquivos.zip#lista-cursos.txt','r');
stream_copy_to_stream($cursos,STDOUT);
fclose($cursos);
