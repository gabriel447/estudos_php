<?php

function abaixoOuCinquenta($produto) {
    if (isset($produto['valor']) && $produto['valor'] <= 50) {
        return $produto['nome'];
    }
}

$lista = [
    ['nome' => 'Produto A', 'valor' => 10],
    ['nome' => 'Produto B', 'valor' => 40],
    ['nome' => 'Produto C', 'valor' => 50],
    ['nome' => 'Produto D', 'valor' => 70],
    ['nome' => 'Produto E', 'valor' => 90],
    ['nome' => 'Produto F', 'valor' => 30],
    ['nome' => 'Produto G', 'valor' => 20]
];

$produtosEconomicos = array_filter($lista, "abaixoOuCinquenta");

print_r($produtosEconomicos);

?>
