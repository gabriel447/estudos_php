<?php

abstract class Pessoa {
    abstract public function demonstrarHabilidade();
}

class Professor extends Pessoa {
    public function demonstrarHabilidade() {
        return "Eu ensino matemática!";
    }
}

class Aluno extends Pessoa {
    public function demonstrarHabilidade() {
        return "Eu aprendo matemática!";
    }
}

$professor = new Professor();
$aluno = new Aluno();

echo $professor->demonstrarHabilidade();
echo $aluno->demonstrarHabilidade();


