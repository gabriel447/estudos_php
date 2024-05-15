<?php

$input = '123,45346,123657,124124,124124';

function tirarVirgula($input) {
    return $items = explode(',', $input);
}

$res = tirarVirgula($input);

print_r($res);