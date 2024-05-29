<?php
namespace Casa;

class Cozinha {
    public function fritar() {
        echo "Estou com fome e vou fritar um ovo."."\n";
    }
}

use Casa\Cozinha as C; 
$cozinhar = new C(); 
$cozinhar->fritar(); 
