<?php

try {
    echo intdiv(4, 0);
} catch (DivisionByZeroError $e) {
    echo $e->getMessage(). "\n";    
}