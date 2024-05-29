<?php

// o legal da interface é que voce pode implementar várias, diferente da herança
// mas a interface é usada somente para comportamentos e não para atributos.

interface Narrador {
    public function nomeNarrador(): string;
}

interface Bola {
    public function corBola(): string;
}

interface Estadio {
    public function cidadeEstadio(): string;
    public function capacidadeEstadio(): int;
}

interface Time {
    public function nomeTime(): string;
    public function titulosTime(): int;
}

class Campeonato implements Narrador, Bola, Estadio, Time {
    public function nomeNarrador(): string {
        return "Galvão Bueno";
    }

    public function corBola(): string {
        return "Marrom";
    }

    public function cidadeEstadio(): string {
        return "Rio de Janeiro";
    }

    public function capacidadeEstadio(): int {
        return 80000;
    }

    public function nomeTime(): string {
        return "Seleção Brasileira";
    }

    public function titulosTime(): int {
        return 5;
    }
}

$campeonato = new Campeonato();

echo "Narrador: ". $campeonato->nomeNarrador(). "\n";
echo "Cor da Bola: ". $campeonato->corBola(). "\n";
echo "Cidade do Estádio: ". $campeonato->cidadeEstadio(). "\n";
echo "Capacidade do Estádio: ". $campeonato->capacidadeEstadio(). "\n";
echo "Nome do Time: ". $campeonato->nomeTime(). "\n";
echo "Número de Títulos do Time: ". $campeonato->titulosTime(). "\n";
