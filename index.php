<?php
require_once __DIR__ . '/vendor/autoload.php';

use Models\Geometry;

//rhombus, square, circle, rectangle
$figure = new Geometry('rhombus',120,10,  3,6,7);
echo $figure->getProvider();
