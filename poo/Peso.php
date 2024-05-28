<?php

abstract class Comida {
    public $peso;
    public $nome;
}

// abstract
// nao pode ser instanciada, 
// metodo nao precisa de chaves, 
// pode ter parametros privados ou protegidos 
// para serem acessados das classes filhas extendidas,

class Arroz extends Comida {
}

class Pizza extends Comida {
}

class Pessoa {
    public $peso;
    
    public function __construct($peso) {
        $this->peso = $peso;
    }
    
    public function comer(Comida $comida) {
        $this->peso += $comida->peso;
        $this->nome = $comida->nome;
        echo "Você comeu {$this->nome} e engordou {$this->peso}kg.";
    }
}

$pizza = new Pizza();
$pizza->peso = 1.2;
$pizza->nome = 'Pizza';

$pessoa = new Pessoa(79.2);
$pessoa->comer($pizza);
