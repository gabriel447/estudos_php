<?php

function fibo($numero){
    if($numero==0 || $numero==1)
     return $numero;
    else
     return (fibo($numero-1) + fibo($numero-2));
 }

 echo fibo(20);