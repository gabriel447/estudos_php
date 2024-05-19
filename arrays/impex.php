<?php

$arr = [1,2,3,4,5,6,7,8,9];
$res = implode('.',$arr);
$ex = explode('.',$res);
print_r($ex);
