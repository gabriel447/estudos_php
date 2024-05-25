<?php 

interface Intarfacezinha {
    public function metododaClasseAbstrata();
}

abstract class ClasseAbstrata implements Intarfacezinha{

    public function metododaClasseAbstrata() {
        echo "Metodo da classe abstrata"."\n";
    }

    abstract public function Funcionar();
}

final class Classe extends ClasseAbstrata  {

    private $param;

    public function __construct($param) {
        $this->param = $param;
    }

    final public function Funcionar() {
        echo "{$this->param} eu estou funcionando"."\n";
    }
}

class Herdeira extends Classe {
    public function Funcionar() {
        echo "{$this->param} eu estou funcionando por herança"."\n";
    }
}

// FINAL
// no caso de classes, ela não pode ser herdada.
// no caso de métodos, eles não podem ser sobreescritos.
// use o ctrl+d e tire os finals e tudo vai funcionar

$exemplo = new Classe('Amor');
$exemplo->metododaClasseAbstrata();
$exemplo->Funcionar();
