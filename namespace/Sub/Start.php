<?php

namespace Sub;

require_once('Hello.php');
require_once('Coffee.php');

use function Sub\Hello;

hello();

use Sub\Coffee as C;

$c = new C();
$c->drink();