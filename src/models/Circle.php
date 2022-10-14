<?php

namespace Models;

use Models\Contracts\FigureCalculator;

class Circle implements FigureCalculator
{

    public function __construct(protected float $r)
    {
     }

    //circle
    //perimeter 2πR
    //area A = π r²


    public function calculateArea(): float
    {
        return 3.14*($this->r*$this->r);
    }

    public function calculatePerimeter(): float
    {
        return 2*3.14*$this->r;
    }

}