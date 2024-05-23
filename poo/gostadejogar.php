<?php

abstract class Pessoa
{
    protected $nome;
    protected $idade;

    public function __construct($nome, $idade)
    {
        $this->nome = $nome;
        $this->idade = $idade;
    }

    public abstract function gostadejogar();
}

class Crianca extends Pessoa
{
    public function gostadejogar()
    {
        echo "Meu nome é {$this->nome}, eu tenho {$this->idade} e gosto de jogar Minecraft.";
    }
}

$crianca = new Crianca('Gustavo', 10);
$crianca->gostadejogar();
