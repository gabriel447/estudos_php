<?php

$notas = [8.3, 9.2, 5.1];
$finais = [];

function aprovados($nota) {
    return $nota >= 7;
}

$finais = array_filter($notas, 'aprovados');

// no filter os valores vem antes (pode ser um array) e depois a funcao de comparaçao, 
// o resultado sera um novo array com os resultados positivos (pode ser reduzido).

print_r($finais);