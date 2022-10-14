<?php

use PHPUnit\Framework\TestCase;
use Models\Circle;
use Models\Geometry;

final class CircleTest extends TestCase
{
    public function testIfCircleClassReturnsCorrectValue()
    {
        $circle = new Circle(5);
        $geometry = new Geometry();

        $this->assertSame(78.5, $geometry->getArea($circle));
    }
}