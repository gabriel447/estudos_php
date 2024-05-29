<?php

require_once 'NaoInteiroException.php'; 
use function \Aritmetica\intdiv; 

try { 
	echo intdiv(8, 3) . '<br>'; 
} 
catch(\Aritmetica\NaoInteiroException $e) { 
	echo 'Resultado nao é um numero inteiro<br>'; 
} 

try { 
	echo intdiv(8, 0) . '<br>'; 
} catch(DivisionByZeroError $e) { 
	echo 'Divisao por zero<br>'; 
} 

echo intdiv(8, 2) . '<br>'; 
echo \intdiv(8, 2) . '<br>'; 
echo \intdiv(8, 3) . '<br>';