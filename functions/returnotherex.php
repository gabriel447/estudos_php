<?php

$soma = function($a, $b) { return $a + $b; };

function mostrarSoma($a, $b, $func) {
    echo $func($a, $b);
}

mostrarSoma(14, 14, $soma); 