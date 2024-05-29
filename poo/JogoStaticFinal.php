<?php

// o static casa bem com o final, protege a classe de ser instanciada e herdada.
// sendo possivel somente a chamada e com a sintaxe curta do static fica melhor..

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
