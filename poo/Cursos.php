<?php

trait ADS {
    public function estudar() {
        echo "Eu vou estudar ADS";
    }
}

trait Engenharia {
    public function estudar() {
        echo "Eu vou estudar Engenharia";
    }
}

trait Letras {
    public function estudar() {
        echo "Eu vou estudar Letras";
    }
}

class Estudante {
    use ADS;
}

$estudante = new Estudante();
$estudante->estudar();