<?php

// principio base de encapsulamento, 
// acessar atributos privados através de métodos públicos

class Carro 
{
 private $cor;
 private $ano;
 
 public function __construct($cor, $ano) {
    $this->cor = $cor;
    $this->ano = $ano;
 } 

 public function getCor() {
    return $this->cor;
 }

 public function getAno() {
    return $this->ano;
 }
}

class Comprador extends Carro
{
    public function comprando() {
        echo "eu estou comprando um carro do ano {$this->getAno()} na cor {$this->getCor()}.";
    }
}

$venda = new Comprador('Amarelo', '2024');
$venda->comprando();