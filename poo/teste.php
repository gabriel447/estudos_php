<?php

abstract class Pessoa {
    protected $idade;
    protected $sexo;
    protected $nome;
    
    public function __construct ($idade, $sexo, $nome) {
        $this->idade = $idade;
        $this->sexo = $sexo;
        $this->nome = $nome;
    }
    
    abstract function gostadefazer();
}

class Estudante extends Pessoa {
    public function gostadefazer() {
        echo "Meu nome é {$this->nome}, eu tenho {$this->idade} anos, sou do sexo {$this->sexo} e gosto de fazer aula de educação física. \n";
    }
}

class Professor extends Pessoa {
    public function gostadefazer() {
        echo "Meu nome é {$this->nome}, eu tenho {$this->idade} anos, sou do sexo {$this->sexo} e gosto de dar aula de Matemática. \n";
    }
}

$estudante = new Estudante(24,'Masculino','João');
$estudante->gostadefazer();

$professor = new Estudante(30,'Masculino','Gabriel');
$professor->gostadefazer();