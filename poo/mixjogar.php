<?php

abstract class Pessoa
{
    protected $nome;
    protected static $idade;

    public function __construct($nome, $idade)
    {
        $this->nome = $nome;
        self::$idade = $idade;
    }

    public abstract function gostadejogar();

    public function setnome($nome) {
        return $this->nome = $nome;
    }

    public function nomedojogo()
    {
        return 'Minecraft';
    }
}

class Crianca extends Pessoa
{
    public function gostadejogar()
    {
        echo "Meu nome é {$this->nome}, tenho ". self::$idade. " anos e gosto de jogar ". parent::nomedojogo(). "\n";
    }
}

// classes abstratas podem ter metodos completos ou abstratos
// mas a classe concreta precisa ter todos os metodos completos..
// interface 0%, abstract 50%, concret class 100%

$crianca = new Crianca('Gustavo', 10);
$crianca->setNome('Gabriel');
$crianca->gostadejogar();


