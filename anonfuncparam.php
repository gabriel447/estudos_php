<?php

$soma = function ($a, $b) {
    return $a + $b;
};

function executar($a, $b, $op, $func) {
    $res = $func($a, $b);
    echo "$a $op $b = $res </br>";
};

executar(2, 3, "+", $soma);

?>