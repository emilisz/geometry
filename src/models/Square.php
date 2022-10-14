<?php
namespace Models;

use Models\Contracts\FigureCalculator;

class Square implements FigureCalculator
{

    public function __construct(protected float $width)
    {
    }

    //Square
    //perimeter a*4
    //area A = a*a

    public function calculateArea(): float
    {
        return $this->width*$this->width;
    }

    public function calculatePerimeter(): float
    {
        return $this->width*4;
    }

}