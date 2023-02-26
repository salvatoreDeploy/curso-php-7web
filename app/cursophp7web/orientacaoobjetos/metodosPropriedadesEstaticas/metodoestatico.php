<?php

namespace cursophp7web\orientacaoobjetos\metodosPropriedadesEstaticas;
class Matematica
{
    public static function somar($x, $y)
    {
        return $x + $y;
    }

    public static $method = 'Statico';
}

//$result = new Matematica();
echo Matematica::somar(12, 15) . "</br>";

echo Matematica::$method . "</br>";