<?php

$teclado = fopen('php://stdin', 'r'); // php://stdin pode ser usado para ler dados do teclado.

echo "Digite um novo curso: ";
$novoCurso = trim(fgets($teclado)); // usamos trim para remover a quebra de linha que fgets coloca automaticamente.
file_put_contents('nova-lista-cursos.txt', "\n$novoCurso", FILE_APPEND);

echo "\nNovo curso adicionado com sucesso!\n";
echo file_get_contents('nova-lista-cursos.txt');

fclose($teclado);


echo '------------------------------';

// Forma alternativa, mais concisa.
echo "Digite um novo curso: ";
$novoCurso = trim(fgets(STDIN));
file_put_contents('nova-lista-cursos.txt', "\n$novoCurso", FILE_APPEND);
echo "\nNovo curso adicionado com sucesso!\n";
echo file_get_contents('nova-lista-cursos.txt');