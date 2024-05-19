<?php

$func = function($a, $b, $op) {
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

function executar($a, $b, $op, $func) {
	echo $func($a, $b, $op);
}

executar(11, 11, '+', $func);