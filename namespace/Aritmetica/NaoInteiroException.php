<?php 
namespace Aritmetica; 

// existe uma hierarquia de erros.. 
// voce pode criar erros personalizados extendendo o Error..

class NaoInteiroException extends \Exception { } 
    function intdiv($a, $b) { 
    if($b == 0){ 
        throw new \DivisionByZeroError(); 
    } 
    if($a % $b > 0) { 
        //é lançado quando nao tem nenhum erro.. 
        throw new NaoInteiroException(); 
    }
    return $a /$b; 
} 

//sem o throw ele somente cria a exceção mas não lança..
//então você pega no Throwable com o '$e->getMessage()' 