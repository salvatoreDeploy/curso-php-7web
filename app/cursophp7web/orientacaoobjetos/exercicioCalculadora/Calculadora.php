<?php

namespace cursophp7web\orientacaoobjetos\exercicioCalculadora;
use orientacaoobjetos\exercicioCalculadora\Exception;

class Calculadora
{
    private $result;
    public $value;

    public function __construct()
    {
        $this->result = 0;
    }

    public function add($value)
    {
        $this->result += $value;
    }

    public function sub($value)
    {
        $this->result -= $value;
    }

    public function multiply($value)
    {
        $this->result *= $value;
    }

    public function divide($value)
    {
        if ($value == 0) {
            throw new Exception("Não é possivel realizar divisão por zero");
        }

        $this->result /= $value;
    }

    public function total()
    {
        return $this->result;
    }

    public function clear()
    {
        $this->result = 0;
    }
}