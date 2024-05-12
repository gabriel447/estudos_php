<?php

function somarBonus($valor) {
   return $valor * 2; // 
}

$valores = [10,90,200,300,15,1200]; 

$contaTotal = array_map("somarBonus", $valores);

print_r($contaTotal);

?>
