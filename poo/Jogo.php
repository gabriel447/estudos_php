<?php

// final não serve para atributos, somente para metodos e classes
// quando uma classe é setada para final ela nao pode ser herdada e nem instanciada

final class Jogo {
    private static $nome = 'Mario';
    private static $tipo = 'Castelo';
    private static $nivel = 'Difícil';

    public static function getNome() {
        return self::$nome;
    }

    public static function getTipo() {
        return self::$tipo;
    }

    public static function getNivel() {
        return self::$nivel;
    }
}

echo Jogo::getNome(). "\n";
echo Jogo::getTipo(). "\n";
echo Jogo::getNivel(). "\n";

