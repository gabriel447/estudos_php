<?php

function fatorial($num) {
    $total = 1;
    for($i = $num; $i > 1; $i--) {
        $total *= $i;
    }
    return $total;
}

echo fatorial(5);

?>