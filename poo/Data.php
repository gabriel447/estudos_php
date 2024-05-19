<?php

class Data {
    public $dia = 1;
    public $mes = 1;
    public $ano = 1970;

    function aniversario() {
        echo "{$this->dia}/{$this->mes}/{$this->ano}";
    }
}

$data = new Data();
$data->dia = 4;
$data->mes = 4;
$data->ano = 1994;

$data->aniversario();