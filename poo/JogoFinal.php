<?php

// Quando definimos uma classe como final, dizemos que ela não pode ser herdada.
// Quando definimos um método como final, significa que ele não pode ser sobrescrito por subclasses.
// Podemos instanciar e chamar métodos de classes finais, desde que essas classes não sejam interfaces ou abstratas.

final class Jogo {
    private $nome = 'Mario';
    private $tipo = 'Castelo';
    private $nivel = 'Difícil';

    public final function getNome() {
        return $this->nome;
    }

    public function getTipo() {
        return $this->tipo;
    }

    public function getNivel() {
        return $this->nivel;
    }

    public final function jogar() {
        echo 'Jogando...';
    }
}

// class Jogador extends Jogo{
//     public function jogar() {
//         echo 'Travou...';
//     }
// }

// descomente e veja que uma classe final não pode ser herdada,
// e o metodo com final não pode ser sobreescrito.

$jogo = new Jogo();
echo "Personagem: ". $jogo->getNome(). "\n";
echo "Tipo da fase: ". $jogo->getTipo(). "\n";
echo "Nível da fase: ". $jogo->getNivel(). "\n";
