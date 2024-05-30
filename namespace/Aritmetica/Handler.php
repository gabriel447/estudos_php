<?php

//Error Handler (para desenvolvimento)

ini_set('display_errors', 1); 
// echo 4 / 0;
// include 'inexistente.php';
error_reporting(E_ERROR); 
error_reporting(E_ALL); 
error_reporting(~E_ALL); 

function filtrarMensagem($errno, $errstring) {
	$text = 'include'; 
	return !!stripos(" $errstring", $text);
} 

set_error_handler('filtrarMensagem', E_WARNING);
restore_error_handler();