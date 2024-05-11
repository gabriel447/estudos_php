<?php

$notas = [8.3, 9.2, 5.1];
$novas = [];

$novas = array_map(function($nota) {
    return round($nota, 0); 
}, $notas);

echo implode(", ", $novas);

?>