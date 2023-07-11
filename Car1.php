<?php

class Car
{
    public $color = 'brown';
    public $weight;
    private $year;
}

$car=new Car();

$car2 = $car;
$car->color="red";

echo var_dump($car2);