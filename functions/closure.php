<?php

function soma($a) {
    return function($b) use ($a) {
        return $a + $b;
    };
}

// Uma closure em PHP aumenta o escopo de acesso de uma função, 
// permitindo que ela acesse variáveis do escopo na qual foi definida anteriormente no seu programa.
// Isso é possível graças à palavra-chave use..

echo soma(13)(3);