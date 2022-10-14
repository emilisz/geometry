<?php

namespace Models;

use Models\Contracts\FigureCalculator;

class Rectangle implements FigureCalculator
{

    public function __construct(protected float $width, protected float $height)
    {
    }

    //rectangle
    //perimeter P = 2a + 2b
    //area A = ab

    public function calculateArea(): float
    {
        return $this->width*$this->height;
    }

    public function calculatePerimeter(): float
    {
        return $this->width*2 + $this->height*2;
    }
}