<?php

//escrevendo em um arquivo..
$arquivo = fopen('teste.txt', 'w');
fwrite($arquivo, "Hello World!");
fclose($arquivo);

//lendo um arquivo pelo tamanho..
$arquivo = fopen('teste.txt', 'r');
$tamanho = filesize('teste.txt');
echo fread($arquivo, $tamanho) . "\n";
fclose($arquivo);

//lendo o arquivo pela linha..
$arquivo = fopen('teste.txt', 'r');
echo fgets($arquivo) . "\n";
//aqui o resultado vai ser vazio pq não tem nada na outra linha..
echo fgets($arquivo) . "\n";
fclose($arquivo);

//lendo um arquivo baseado no fim do conteúdo..
$arquivo = fopen('teste.txt', 'r');
while(!feof($arquivo)){
    echo fgetc($arquivo) . "\n";
}
fclose($arquivo);

