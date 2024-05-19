<?php
// criando classe que retorna os atributos como array

class Pessoa {
    
    public $nome;
    public $idade;
    public $sexo;
    public $altura;
    public $peso;

    function GetAtributos() {
        return [
            $this->nome,
            $this->idade,
            $this->sexo,
            $this->altura,
            $this->peso
        ];
    }
}

$pessoa = new Pessoa();
$pessoa->nome = "Gabriel";
$pessoa->idade = 30;
$pessoa->sexo = "masculino";
$pessoa->altura = 1.89;
$pessoa->peso = '85kg'; 

print_r($pessoa->GetAtributos());
