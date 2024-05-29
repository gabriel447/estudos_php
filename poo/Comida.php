<?php

// o abstract se aplica tambem para atributos e não somente para funções.

abstract class Comida {
    public $peso;
}

class Arroz extends Comida {
}

class Sorvete extends Comida {

}

class Banana extends Comida {

}

class Pessoa {
    public $peso;

    function __construct($peso) {
        $this->peso = $peso;
    }

    public function comer(Comida $comida) {
        $this->peso += $comida->peso;
    }
}

$arroz = new Arroz();
$arroz->peso = 0.66;

$sorvete = new Sorvete();
$sorvete->peso = 1.5;

$banana = new Sorvete();
$banana->peso = 0.30;

$pessoa = new Pessoa(79.5);
$pessoa->comer($banana);

echo $pessoa->peso;