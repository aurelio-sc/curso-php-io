<?php

$arquivoCsv = fopen('cursos.csv', 'r');

while (!feof($arquivoCsv)) {
    $curso = fgetcsv($arquivoCsv,0,';');
    echo $curso[0]. ' - ' .$curso[1].PHP_EOL;    
}

