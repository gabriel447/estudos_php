<?php

$notas = [8.3, 9.2, 5.1];
$finais = [];

$finais = array_map(round, $notas);

print_r($finais);

?>