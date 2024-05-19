<?php

$sonhoviajar = array(
    'Noruega',
    'Suiça',
    'Amsterdam',
    'Tailandia',
    'Japao',
    'California'
);

$indiceSorteado = rand(0, count($sonhoviajar) - 1);

$paisSorteado = $sonhoviajar[$indiceSorteado];

echo "O país sorteado para sua próxima viagem é: ". $paisSorteado;