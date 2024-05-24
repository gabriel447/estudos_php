<?php

interface Animal {
    public function comer();
}

interface Canino extends Animal {
    public function latir();
}

interface Felino {
    public function miar();
}

class Cachorro implements Canino {
    public function comer() {
        echo "Cachorro comeu"."\n";
    }

    public function latir() {
        echo "Cachorro latiu"."\n";
    }
}

class Gato implements Animal, Felino {
    public function comer() {
        echo "Gato comeu"."\n";
    }
    public function miar() {
        echo "Gato miou"."\n";
    }
}

// uma classe pode implementar multiplas interfaces
// as interfaces por padrão são públicas
// interfaces podem extender outras interfaces
// implementando uma interface é obrigatoria implementar a função que há nela

$dog = new Cachorro();
$cat = new Gato();

$dog->comer();
$dog->latir();
$cat->comer();
$cat->miar();
