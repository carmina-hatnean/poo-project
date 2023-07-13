<?php


//traits solve two big problems in Php:
//1. code duplication
//2. single inheritance problem

trait MyTrait
{
    public $a = 10;
    public function fly()
    {
        echo "I am flying" . PHP_EOL;
    }
}
trait EngineTrait
{
    public function hello()
    {
        echo " I have an engine!";
    }
}


class Plain
{
    use MyTrait, EngineTrait;
}

class Helicopter
{
    use MyTrait, EngineTrait;
}

class Car
{
use EngineTrait;
}

$plain = new Plain();
echo $plain->a;
$helicopter = new Helicopter();
$plain->fly();
$helicopter->fly();

//this is how traits can reduce code, code duplication
// methods traits can have static properties, static methods and abstract methods and normal properties
// traits can't have constant