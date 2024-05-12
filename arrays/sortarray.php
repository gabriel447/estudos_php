<?php

$sonhoviajar = array(
    'Noruega',
    'Suiça',
    'Amsterdam',
    'Tailandia',
    'Japao',
    'California'
);

$indiceSorteado = array_rand($sonhoviajar, 1);

$paisSorteado = $sonhoviajar[$indiceSorteado];

echo "O país sorteado para sua próxima viagem é: ". $paisSorteado;

?>