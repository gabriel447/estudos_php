<?php

// declarando varios contextos e chamando as constantes de cada namespace..

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

// essa sintaxe só funciona na IDE
// echo constant('\\' . __NAMESPACE__ . '\constante');

echo \home\constante;
echo \home\um\constante;
echo \home\um\dois\constante;