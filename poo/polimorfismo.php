<?php

abstract class Pessoa {
    protected $nome;
    protected $idade;

    public function __construct($nome, $idade) {
        $this->nome = $nome;
        $this->idade = $idade;
    }

    abstract public function demonstrarHabilidade();

    public function apresentar() {
        return "Olá, meu nome é {$this->nome} e eu tenho {$this->idade} anos.";
    }
}

class Professor extends Pessoa {
    public function demonstrarHabilidade() {
        return "Eu ensino matemática Meu nome é {$this->nome} e tenho {$this->idade} anos.";
    }
}

class Aluno extends Pessoa {
    public function demonstrarHabilidade() {
        return "Eu aprendo matemática Meu nome é {$this->nome} e tenho {$this->idade} anos.";
    }
}

$professor = new Professor("João", 35);
$aluno = new Aluno("Maria", 18);

echo $professor->apresentar();
echo $professor->demonstrarHabilidade();

echo $aluno->apresentar();
echo $aluno->demonstrarHabilidade();
