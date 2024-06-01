<?php

$dataHora = new DateTime('2024-06-01');
echo $dataHora->format('d-m-Y')."\n";

$dataHora->modify('+1 month');
echo $dataHora->format('d-m-Y')."\n";

$intervalo = new DateInterval('P10D');
$dataHora->add($intervalo);
echo $dataHora->format('d-m-Y')."\n";

$fusoHorarioBrasilia = new DateTimeZone('America/Sao_Paulo');
$dataHora->setTimezone($fusoHorarioBrasilia);
echo $dataHora->format('d-m-Y H:i:s T')."\n";

// https://www.php.net/manual/pt_BR/book.datetime.php
// https://www.php.net/manual/pt_BR/ref.datetime.php