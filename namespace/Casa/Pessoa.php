<?php
namespace Casa;

// temos as 4 formas de extender um arquivo:
// no include se algo der erro a aplicaçao nao para
// no require a aplicaçao para..
// nos casos do once, evitamos que o arquivo seja injetado mais de uma vez..

// include 'Banheiro.php';
// include_once 'Banheiro.php';
// require 'Banheiro.php';
require_once 'Banheiro.php';

class Pessoa extends Banheiro {}

$pessoa = new Pessoa();
$pessoa->cagar();
