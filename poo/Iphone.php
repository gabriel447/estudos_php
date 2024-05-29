<?php
abstract class Celular {
    abstract function ligar();
}

class Iphone extends Celular {
    public function ligar() {
        echo "Ligando o iPhone...\n";
    }
}

class Samsung extends Celular {
    public function ligar() {
        echo "Ligando o Samsung...\n";
    }
}

$iphone = new Iphone();
$iphone->ligar();

$samsung = new Samsung();
$samsung->ligar();