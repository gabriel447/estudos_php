<?php
namespace Casa;

// include = warning (não para a aplicação)
// require = fatal error (para a aplicação)
// _once = previne que seja carregado mais de uma vez

require_once 'Banheiro.php';

class Pessoa extends Banheiro {}

$pessoa = new Pessoa();
$pessoa->cagar();