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

$player = new Player();
$player->jogarJungle();
