<?php
namespace Models;

use Models\Contracts\Figure;

class Square extends Geometry implements Figure
{

    public function __construct(protected float $width)
    {
    }

    //Square
    //perimeter a*4
    //area A = a*a

    public function calculate(): string
    {
        $area = $this->width*$this->width;
        $perimeter = $this->width*4;

        return 'Area: '.$area  .' , '. 'Perimeter: '. $perimeter;
    }

}