<?php

function recursiveFunction($num)
{
    if ($num!=0) {
        echo "$num ";
        recursiveFunction(--$num);
    }
}
recursiveFunction(10);