<?php

$input = '123,45346,123657,124124,124124';

function trocar($input) {
    return $input = str_replace(',', '|', $input);
}

$res = trocar($input);

print_r($res);