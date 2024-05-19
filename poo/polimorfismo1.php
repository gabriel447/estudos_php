<?php

abstract class Animal {
    abstract public function locomover();
}

class Mamifero extends Animal {
    public function locomover() {
        echo "Mamíferos correm!";
    }
}

class Ave extends Animal {
    public function locomover() {
        echo "Aves voam!";
    }
}

$animal = new Mamifero();
$animal->locomover();

$animal = new Ave();
$animal->locomover();