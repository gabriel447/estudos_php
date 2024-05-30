<?php

// declarando varios contextos e chamando as constantes de cada namespace..
// usar o caminho do __NAMESPACE__ pra setar,
// pq no servidor vai ser diferente do seu local e fazer isso evitará conflitos..

namespace home;
echo __DIR__ . "\n";
echo __NAMESPACE__ . "\n";
const constante = 123;

namespace home\um;
echo __NAMESPACE__ . "\n";
const constante = 456;

namespace home\um\dois;
echo __NAMESPACE__ . "\n";
const constante = 789;

echo \home\constante;
echo \home\um\constante;
echo \home\um\dois\constante;