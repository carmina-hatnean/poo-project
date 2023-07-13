<?php


//traits solve two big problems in Php:
//1. code duplication
//2. single inheritance problem

trait FlyableTrait
{

   abstract public function fly();
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
    use FlyableTrait, EngineTrait;
    public function fly()
    {
        echo "I am flying at 800km/h speed";
    }
}

class Helicopter
{
    use FlyableTrait, EngineTrait;
    public function fly()
    {
        echo "I am flying at 300km/h speed";
    }
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


// am ramas la 7:44 https://www.youtube.com/watch?v=eeqa3nHI5mI&ab_channel=TheCodeholic