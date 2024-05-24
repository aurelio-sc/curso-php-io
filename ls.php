<?php

$diretorioAtual = dir('.'); //Esse método com este parâmetro retorna um objeto Directory do diretório atual.

echo $diretorioAtual->path . PHP_EOL;

echo '---------------------' . PHP_EOL;

while ($arquivo = $diretorioAtual->read()) {
    echo $arquivo . PHP_EOL;
}