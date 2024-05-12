<?php

function recursiveFunction($num)
{
    if ($num!=100) {
        echo "$num ";
        recursiveFunction(++$num);
    }
}
recursiveFunction(10);

?>