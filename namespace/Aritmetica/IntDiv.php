<?php

// se algo que estiver fora do try der erro, vai parar a aplicacao,
// agora se tiver try/catch voce pode tratar o erro enquanto
// a aplicacao funciona normal..

// regra de ouro
// erros mais genéricos primeiro
// erros específicos em seguida

require_once 'NaoInteiroException.php'; 
use function \Aritmetica\intdiv; 

//try - bloco de codigo que pode gerar um erro..
try { 
	echo intdiv(8, 3) . "\n"; 
}
//catch - se der erro retorna uma exceçao.
//parâmetro - tipo de erro que quer tratar.
//ex: Error, Exception, DivisionByZeroErro, Throwable, e as personalizadas..
//Error é para coisas mais graves.
// quando uma exceçao é lançada o código seguinte não é executado, a aplicação para!!
catch(\Aritmetica\NaoInteiroException $e) { 
	echo 'Resultado não é um número inteiro' . "\n"; 
} 

try { 
	echo intdiv(8, 0) . "\n"; 
} catch(DivisionByZeroError $e) { 
	echo 'Divisão por zero' . "\n"; 
} 

echo intdiv(8, 2) . "\n"; 
echo \intdiv(8, 2) . "\n"; 
echo \intdiv(8, 3) . "\n";

//finally, executa independente, igual o default do switch/case 