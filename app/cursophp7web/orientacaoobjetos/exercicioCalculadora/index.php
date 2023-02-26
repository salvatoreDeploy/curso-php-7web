<?php

use cursophp7web\orientacaoobjetos\exercicioCalculadora\Calculadora;

require 'Calculadora.php';

$calculadora = new Calculadora();
$calculadora->add(12);
$calculadora->add(2);
$calculadora->sub(1);
$calculadora->multiply(3);
$calculadora->divide(2);
$calculadora->add(0.5);

echo "Total: " . $calculadora->total();
$calculadora->clear();
