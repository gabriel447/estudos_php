<?php

trait Metal {
    public function escutarMetal() {
        echo "Tocando Metallica\n";
    }
}

trait Reggae {
    public function escutarReggae() {
        echo "Tocando Bob Marley\n";
    }
}

trait Funk {
    public function escutarFunk() {
        echo "Tocando James Brown\n";
    }
}

class Musica {
    use Metal, Reggae, Funk;
}

$ouvir = new Musica();
$ouvir->escutarMetal();
$ouvir->escutarReggae();
$ouvir->escutarFunk();