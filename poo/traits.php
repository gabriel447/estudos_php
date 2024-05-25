<?php

trait JogarLoL {

    public function jogar() {
        echo "Jogando na jungle\n";
    }
}

trait JogarCS {
    private $time;

    public function jogar($time) {
        echo "Jogando de doze no time de terroristas\n";
    }
}

class Player {
    use JogarLoL, JogarCS {
        JogarLoL::jogar as jogarLoL;
        JogarCS::jogar as jogarCS;
        JogarLoL::jogar insteadOf JogarCS;
    }

    public function jogar() {
        $this->jogarLoL(); 
    }
}

$player = new Player();
$player->jogar(); 
