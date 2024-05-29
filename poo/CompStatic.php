<?php

class Carro 
{
    private static $cor = 'Amarela';
    private static $ano = '2024';

    public static function getCor() {
        return self::$cor;
    }

    public static function getAno() {
        return self::$ano;
    }
}

class Comprador extends Carro
{
    public static function comprando() {
        echo "Eu estou comprando um carro do ano ". parent::getAno(). " na cor ". parent::getCor(). ".";
    }
}

Comprador::comprando();
