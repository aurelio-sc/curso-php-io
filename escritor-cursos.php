<?php

//Sobrescrevendo o conteúdo do arquivo:
$arquivo = fopen('novo-arquivo.txt', 'w'); //fopen cria um arquivo se o ele não existir. O modo "w" sobrescreve o arquivo existente
$curso = 'PHP I/O: trabalhando com arquivos e streams';

fwrite($arquivo, $curso);

fclose($arquivo);


//Adicionando conteúdo ao arquivo:
$arquivo = fopen('novo-arquivo.txt', 'a'); //O modo "a" adiciona ao final do arquivo.
$curso = "\nPHP: Programação Funcional";

fwrite($arquivo, $curso);

fclose($arquivo);


//Alternativa para adicionar conteúdo ao arquivo:
$curso = "\nPHP: dominando as Collections";

file_put_contents('novo-arquivo.txt', $curso, FILE_APPEND); //O terceiro parâmetro (flag) "FILE_APPEND" faz com que o conteúdo seja adicionado ao final do arquivo. Existem diversas outras flags.