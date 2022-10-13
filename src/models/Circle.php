<?php

namespace Models;

use Models\Contracts\Figure;

class Circle extends Geometry
{

    public function __construct(protected float $r)
    {
     }

    //circle
    //perimeter 2πR
    //area A = π r²

    public function calculate(): string
    {
        $area = 3.14*($this->r*$this->r);
        $perimeter = 2*3.14*$this->r;

        return 'Area: '. $area .' , '. 'Perimeter: '. $perimeter;
    }

}