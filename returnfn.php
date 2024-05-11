<?php

function fatorial($num) {
    $calcular = function ($num) {
        $total = 1;
        for($i = $num; $i > 1; $i--) {
            $total *= $i;
        }
        return $total;
    };

    return $calcular($num);
}

echo fatorial(5);

?>