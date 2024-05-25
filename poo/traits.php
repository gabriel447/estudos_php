<?php

trait JogarLoL {
    public function jogar() {
        echo "Jogando lolzinho na jungle\n";
    }
}

trait JogarCS {
    public function jogar() {
        echo "Jogando de doze no time de terroristas\n";
    }
}

class Player {
    use JogarLoL, JogarCS {
        JogarCS::jogar insteadOf JogarLoL;
        JogarLoL::jogar as jogarJungle;
    }
}

// os traits podem ser usados como uma classe porém com múltiplas heranças
// devemos usar a nomeclatura 'use' para informar qual trait a clase vai usar
// quando os metodos possuem o mesmo nome usamos o insteadOf e o as para resolver

$player = new Player();
$player->jogarJungle();
