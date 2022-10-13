<?php

namespace Models;


class Geometry
{
    public function __construct(protected string $figure, protected float $width = 0,protected float $height = 0,protected float $r = 0, protected float $diagonal1=0, protected float $diagonal2=0)
    {
    }

    function getProvider():string
    {
            if($this->figure == 'circle'){
                return (new Circle($this->r))->calculate();
            }
            if ($this->figure == 'rectangle'){
                return (new Rectangle($this->width, $this->height))->calculate();
            }
            if ($this->figure == 'square'){
                return (new Square($this->width))->calculate();
            }
            if ($this->figure == 'rhombus'){
                return (new Rhombus($this->width, $this->diagonal1,$this->diagonal2))->calculate();
            }
            return 'Incorrect type';
    }
}