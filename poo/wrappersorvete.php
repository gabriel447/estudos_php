<?php

abstract class Pessoa
{
    protected static $nome;
    protected static $idade;

    public function __construct($nome, $idade)
    {
        self::$nome = $nome;
        self::$idade = $idade;
    }

    public static abstract function tomarsorvete();
}

class Crianca extends Pessoa
{
    public static function tomarsorvete()
    {
        echo "Meu nome é ". self::$nome. ", tenho ". self::$idade. " anos e estou indo tomar sorvete.";
    }

    public static function criaCrianca($nome, $idade)
    {
        return new static($nome, $idade);
    }
}

$c = Crianca::criaCrianca('Gabriel', 30);
$c->tomarsorvete();
