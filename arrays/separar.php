<?php

$input = '12345346123657124124124124';

function separar($input) {
    $chunks = str_split($input, 3);
    $result = implode(', ', $chunks);
    return $result;
}

echo separar($input);

?>