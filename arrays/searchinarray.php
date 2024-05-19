<?php

$personagensGameOfThrones = array(
    'Eddard “Ned” Stark',
    'Daenerys Stormborn Targaryen',
    'Tyrion Lannister',
    'Jon Snow'
);

$personagemBuscado = 'Tyrion Lannister';

if (in_array($personagemBuscado, $personagensGameOfThrones)) {
    echo "O personagem $personagemBuscado está na série Game of Thrones.";
} else {
    echo "O personagem $personagemBuscado não está na série Game of Thrones.";
}