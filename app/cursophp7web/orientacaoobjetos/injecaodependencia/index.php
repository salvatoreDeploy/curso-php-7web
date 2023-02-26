<?php

class Basico1
{
    public function somar($x, $y)
    {
        return $x + $y;
    }
}

class Basico2
{
    public function somar($x, $y)

    {
        $res = $x;
        for ($i = 0; $i < $y; $i++) {
            $res++;
        }

        return $res;

    }
}

class Matematica{
    private $basico;

    public function __construct($classe)
    {
        $this->basico = $classe;
    }

    public function somar ($x, $y){
        return $this->basico->somar($x,$y);
    }
}
$classe = new Basico2();
$mat = new Matematica($classe);
echo $mat->somar(5,15);