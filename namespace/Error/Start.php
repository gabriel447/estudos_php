<?php

require_once __DIR__. '/CustomException.php';

function menordedezoito($idade) {
    if ($idade < 18) {
        throw new CustomException("Você é menor de idade! \n");
    }
    return $idade;
}

echo menordedezoito(17);

