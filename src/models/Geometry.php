<?php

namespace Models;


use Models\Contracts\FigureCalculator;

class Geometry
{
    public function getArea(FigureCalculator $figure): float
    {
        return $figure->calculateArea();
    }

    public function getPerimeter(FigureCalculator $figure): float
    {
        return $figure->calculatePerimeter();
    }
}