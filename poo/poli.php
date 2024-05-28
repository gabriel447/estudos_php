<?php

class Pessoa {
    protected $nome;
    protected $idade;
    
    public function __construct($nome, $idade) {
        $this->nome = $nome;
        $this->idade = $idade;
    }
}

class Homem extends Pessoa {
    public function correr() {
        echo "Meu nome é ". $this->nome . ", tenho ". $this->idade . " anos, e estou correndo.";
    }
}

$pessoa = new Homem('Gabriel', 30);
$pessoa->correr();