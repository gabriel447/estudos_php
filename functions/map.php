<?php

$notas = [8.3, 9.2, 5.1];
$novas = [];

$novas = array_map(function($nota) {
    return round($nota, 0); 
}, $notas);

// no map a funcao vem antes (ex: de multiplicacao), 
// depois vem os valores (pode ser array), 
// ele devolve um novo array com os mesmo dados so que transformados

echo implode(", ", $novas);