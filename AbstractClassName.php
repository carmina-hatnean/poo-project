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
{   public $radius;
    public function __construct($color,$radius)
    {
        parent::__construct($color);
        $this->radius = $radius;
    }

    public function getArea(): float
    {
        return $this->radius*$this->radius * 3.14;

    }
}

class Rectangle extends Shape
{
    public $width;
    public $length;
    public function __construct($color,$width,$length)
    {
        parent::__construct($color);
        $this->width=$width;
        $this->length=$length;
    }

    public function getArea(): float
    {
        return $this->width * $this->length;
    }
}
$triangle=new Triangle("red");
$rectangle=new Rectangle("blue",200,300);
$circle =new Circle('pink',10);
echo $rectangle->getArea().PHP_EOL;
echo $circle->getArea().PHP_EOL;