<?php

namespace Models;

use Models\Contracts\Figure;

class Rectangle extends Geometry implements Figure
{

    public function __construct(protected float $width, protected float $height)
    {
    }

    //rectangle
    //perimeter P = 2a + 2b
    //area A = ab

    public function calculate(): string
    {
        $area = $this->width*$this->height;
        $perimeter = $this->width*2 + $this->height*2;

        return 'Area: '.$area  .' , '. 'Perimeter: '. $perimeter;
    }
}