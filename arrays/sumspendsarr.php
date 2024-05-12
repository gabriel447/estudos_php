<?php

$gastosFixos = array(
    'emprestimo' => 400,
    'academia' => 110,
    'tv' => 140,
    'sofa' => 90,
    'barba' => 50,
    'macbook' => 300,
    'roupas' => 100,
    'suplemento' => 30
);

$total = 0;
foreach($gastosFixos as $tipo => $valor) {
    $total += $valor;
}

echo "Total de gastos fixos: $". $total;