<?php

abstract class Pessoa {
    protected $nome;
    protected $idade;

    public function __construct($nome, $idade) {
        $this->nome = $nome;
        $this->idade = $idade;
    }

    abstract public function demonstrarHabilidade();
}

class Professor extends Pessoa {
    public function demonstrarHabilidade() {
        return "Meu nome é {$this->nome}, tenho {$this->idade} anos e ensino matemática.\n";
    }
}

class Aluno extends Pessoa {
    public function demonstrarHabilidade() {
        return "Meu nome é {$this->nome}, tenho {$this->idade} anos e estudo matemática.\n";
    }
}

$professor = new Professor("Diego", 31);
$aluno = new Aluno("Gabriel", 30);
echo $professor->demonstrarHabilidade();
echo $aluno->demonstrarHabilidade();
