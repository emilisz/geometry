<?php
namespace Models;

use Models\Contracts\FigureCalculator;

class Rhombus implements FigureCalculator
{

    public function __construct(protected float $width,protected float $diagonal1,protected float $diagonal2)
    {
    }

    //Rhombus
    //perimeter a*4
    //area A = Multiply the length of the diagonals. /2

    public function calculateArea(): float
    {
        return ($this->diagonal1*$this->diagonal2)/2;
    }

    public function calculatePerimeter(): float
    {
        return $this->width*4;
    }

}
