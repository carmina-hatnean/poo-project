<?php

abstract class Shape
{
    public $color;

    public function __construct($color)
    {
        $this->color=$color;
    }
    abstract public function getArea(): float;

    /**
     * @return mixed
     */
    public function getColor()
    {
        return $this->color;
    }
}

class Triangle extends Shape
{
    public function getArea(): float
    {

    }
}
class Circle extends Shape
{
    public function getArea(): float
    {

    }
}

class Rectangle extends Shape
{
    public function getArea(): float
    {

    }
}
$t=new Triangle("red");

// 3:25 https://www.youtube.com/watch?v=EyY3BVPJXtI&ab_channel=TheCodeholic