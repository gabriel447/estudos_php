<?php

class Endereco {
    private $bairro;
    private $cidade;
    private $estado;

    public function __construct($bairro, $cidade, $estado = 'Parana') {
        $this->bairro = $bairro;
        $this->cidade = $cidade;
        $this->estado = $estado;
    }

    public function __destruct() {
        $this->bairro = null;
        $this->cidade = null;
        $this->estado = null;
    }

    public function getAtributos() {
        echo "Bairro: {$this->bairro}, Cidade: {$this->cidade}, Estado: {$this->estado}";
    }
}

$endereco = new Endereco('Xaxim', 'Curitiba');
$endereco->getAtributos();
// unset($endereco);
$endereco->getAtributos();
