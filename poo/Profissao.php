<?php

abstract class Pessoa {
    protected $nome;
    protected $idade;
    protected $profissao;

    public function __construct($nome, $idade, $profissao) {
        $this->nome = $nome;
        $this->idade = $idade;
        $this->profissao = $profissao;
    }

    abstract public function trabalho();
}

class Jovem extends Pessoa {
    public function trabalho() {
        if($this->profissao == 'nenhuma') {
            echo "Meu nome é {$this->nome}, tenho {$this->idade} anos e sou arquiteto.\n";
        }
    }
}

class Adulto extends Pessoa {
    public function trabalho() {
        if($this->profissao == 'nenhuma') {
            echo "Meu nome é {$this->nome}, tenho {$this->idade} anos e sou um vagabundo.\n";
        }
    }
}

$adulto = new Adulto('Henrique', 29, 'nenhuma');
$adulto->trabalho();

$jovem = new Jovem('Gabriel', 30, 'nenhuma');
$jovem->trabalho();
