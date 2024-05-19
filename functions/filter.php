<?php

$notas = [8.3, 9.2, 5.1];
$finais = [];

function aprovados($nota) {
    return $nota >= 7;
}

$finais = array_filter($notas, 'aprovados');

print_r($finais);