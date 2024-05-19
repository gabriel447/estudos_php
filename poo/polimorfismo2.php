<?php

/*
Neste exemplo, 
o polimorfismo permite que o método demonstrarHabilidade() 
seja chamado de maneiras diferentes em objetos de diferentes classes (Professor e Aluno), 
mesmo que o método tenha a mesma assinatura em todas elas. 
Isso mostra como o polimorfismo pode ser utilizado para criar interfaces flexíveis e reutilizáveis em PHP, 
permitindo que o mesmo método seja adaptado para diferentes contextos e comportamentos. 
*/

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


