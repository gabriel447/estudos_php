<?php

<?php

$soma = function($a, $b) { return $a + $b; };

echo $soma(12, 12);

function mostrarSoma($a, $b, $func) {
	echo $func($a, $b);
}

mostrarSoma(14, 14, $soma);

?>