<?php

class CustomException extends Exception {
    public function __construct($message, $code = 0, $previous = null) {
        echo "Erro personalizado: $message \n";
        parent::__construct($message, $code, $previous);
    }
}