<?php

$input = '123,45346,123657,124124,124124';

function trocarPorBarra($input) {
    $items = explode(',', $input);
    return implode('/', $items);
}

$res = trocarPorBarra($input);

print_r($res);