<?php

// Array com alguns dos principais personagens da série Game of Thrones
$personagensGameOfThrones = array(
    'Eddard “Ned” Stark',
    'Daenerys Stormborn Targaryen',
    'Tyrion Lannister',
    'Jon Snow'
);

// Personagem que queremos verificar se está no array
$personagemBuscado = 'Tyrion Lannister'; // Exemplo de personagem buscado

// Verifica se o personagem buscado está no array de personagens
if (in_array($personagemBuscado, $personagensGameOfThrones)) {
    echo "O personagem $personagemBuscado está na série Game of Thrones.";
} else {
    echo "O personagem $personagemBuscado não está na série Game of Thrones.";
}

?>
