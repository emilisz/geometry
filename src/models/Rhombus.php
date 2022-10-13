<?php
namespace Models;

use Models\Contracts\Figure;

class Rhombus extends Geometry implements Figure
{

    public function __construct(protected float $width,protected float $diagonal1,protected float $diagonal2)
    {
    }

    //Rhombus
    //perimeter a*4
    //area A = Multiply the length of the diagonals. /2

    public function calculate(): string
    {
        $area = ($this->diagonal1*$this->diagonal2)/2;
        $perimeter = $this->width*4;

        return 'Area: '.$area  .' , '. 'Perimeter: '. $perimeter;
    }

}
