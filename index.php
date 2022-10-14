<?php
require_once __DIR__ . '/vendor/autoload.php';

use Models\Geometry;
use Models\Circle;
use Models\Square;
use Models\Rhombus;
use Models\Rectangle;


//rhombus, square, circle, rectangle
//$figure = new Geometry('rhombus',120,10,  3,6,7);
//echo $figure->getProvider();

$geometry = new Geometry();

$circle = new Circle(5);
$square = new Square(5);
$rhombus = new Rhombus(5,6,7);
$rectangle = new Rectangle(5,8);

echo $geometry->getArea($circle) . PHP_EOL;
echo $geometry->getPerimeter($circle) . PHP_EOL;

echo $geometry->getArea($square) . PHP_EOL;
echo $geometry->getPerimeter($square) . PHP_EOL;

echo $geometry->getArea($rhombus) . PHP_EOL;
echo $geometry->getPerimeter($rhombus) . PHP_EOL;

echo $geometry->getArea($rectangle) . PHP_EOL;
echo $geometry->getPerimeter($rectangle) . PHP_EOL;
