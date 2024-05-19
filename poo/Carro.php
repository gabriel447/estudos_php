<?php
// criando classe que retorna os atributos como objeto

class Carro {
    
    public $modelo;
    public $marca;
    public $ano;
    public $cor;
    
    function GetAtributos() {
        $atributos = new stdClass();
        $atributos->modelo = $this->modelo;
        $atributos->marca = $this->marca;
        $atributos->ano = $this->ano;
        $atributos->cor = $this->cor;
        
        return $atributos;
    }
}

$carro = new Carro();
$carro->modelo = "Fusca";
$carro->marca = "VW";
$carro->ano = 1970;
$carro->cor = "Branco";

var_dump($carro->GetAtributos());