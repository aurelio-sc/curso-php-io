<?php

//A seguir são apresentados alguns exemplos de leitura de arquivos:

//1. Lendo o arquivo linha por linha:
$arquivo = fopen('lista-cursos.txt', 'r');

while (!feof($arquivo)) {
    $curso = fgets($arquivo);
    echo $curso;
}

fclose($arquivo);

echo(PHP_EOL.'---------------------'.PHP_EOL);

//2. Lendo o arquivo inteiro de uma vez (ou uma parte dele, se assim desejar):

$arquivo = fopen('lista-cursos.txt', 'r');
$tamanhoDoArquivo = filesize('lista-cursos.txt');
$cursos = fread($arquivo, $tamanhoDoArquivo); //$tamanhoDoArquivo pode ser alterado para ler apenas parte do arquivo
echo $cursos;
fclose($arquivo);

echo(PHP_EOL.'---------------------'.PHP_EOL);

//3. Alternativa para ler o arquivo inteiro de uma vez:

$cursos = file_get_contents('lista-cursos.txt');
echo $cursos;

echo(PHP_EOL.'---------------------'.PHP_EOL);

//4. Lendo o arquivo inteiro de uma vez e guardando em um array:

$cursos = file('lista-cursos.txt');
var_dump($cursos);