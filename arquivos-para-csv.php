<?php

//Vamos abrir os arquivos com o método file() para que o retorno seja um array:
$meusCursos = file('lista-cursos.txt');
$outrosCursos = file('novo-arquivo.txt');

$arquivoCsv = fopen('cursos.csv', 'w');

foreach ($meusCursos as $curso) {
    $linha = [trim($curso), 'Finalizado'];
    fputcsv($arquivoCsv, $linha, ';'); //O Excel entende o ; como caractere delimitador;    
}

foreach ($outrosCursos as $curso) {
    $linha = [trim($curso), 'Não Finalizado'];
    fputcsv($arquivoCsv, $linha, ';');
}

fclose($arquivoCsv);