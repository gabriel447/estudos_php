<?php

function fat($numero){
    if($numero==0)
     return 1;
    else
     return $numero * fat($numero-1);
 }

 echo fat(9);

?>
