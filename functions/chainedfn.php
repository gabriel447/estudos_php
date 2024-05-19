<?php

//esse codigo pode ser considerado uma closure 
//porque usa uma variavel global chamada $op 
//que e fornecida pela funcao anonima e reutilizada pela nomeclatura use

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