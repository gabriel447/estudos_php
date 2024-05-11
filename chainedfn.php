<?php

function executar($a, $b, $op) {
    $func = function($a, $b) use ($op) {
        switch ($op) {
            case '+':
                return $a + $b;
            case '-':
                return $a - $b;
            case '*':
                return $a * $b;
            case '/':
                return $a / $b;
        }
    };

    return $func($a, $b);
}

echo executar(10, 10, '+');

?>