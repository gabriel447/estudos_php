<?php

function abaixoOuCinquenta($produto) {
    if ($produto <= 50) {
        return true;
    }
    return false;
}

$lista = [
    10,
    40,
    50,
    70,
    90,
    30,
    20
];

$produtosEconomicos = array_filter($lista, "abaixoOuCinquenta");

print_r($produtosEconomicos);

?>
