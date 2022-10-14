<?php

namespace Models\Contracts;

interface FigureCalculator
{
    public function calculateArea():float;
    public function calculatePerimeter():float;
}