<?php

class Fruta {
    protected $nome;
    protected $sabor;

    public function __construct($nome, $sabor) {
        $this->nome = $nome;
        $this->sabor = $sabor;
    }
}

class Compra extends Fruta {
    public function feedback() {
        echo "Comprei uma {$this->nome} e ela estava {$this->sabor}.";
    }
}

$fruta = new Compra('Laranja', 'doce');
$fruta->feedback();


