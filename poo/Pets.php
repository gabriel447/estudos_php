<?php

abstract class Animal {
    abstract function pedirComida();
}

interface Felino {
    public function miar();
}

interface Canino {
    public function latir();
}

class Pets extends Animal implements Felino, Canino {
    public function miar() {
        echo "Miau!\n";
    }
    
    public function latir() {
        echo "Au Au!\n";
    }
    
    public function pedirComida() {
        echo "Os pets querem comida!!\n";
    }
}

$pets = new Pets();
$pets->latir();
$pets->miar();
$pets->pedirComida();