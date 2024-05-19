<?php

function investir($valor) {
   return $valor * 100;
}

$investimentos = [10,90,200,300,15,1200]; 

$resultado = array_map("investir", $investimentos);

print_r($resultado);
