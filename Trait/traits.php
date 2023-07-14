<?php


//traits solve two big problems in Php:
//1. code duplication
//2. single inheritance problem

trait FlyableTrait
{
    abstract public function fly();
    public function hello()
    {
        echo "Hello, I can fly!" . PHP_EOL;
    }
}

trait EngineTrait
{
    public function hello()
    {
        echo "I have an engine!" . PHP_EOL;
    }
}


class Plain
{
    use FlyableTrait, EngineTrait{
        FlyableTrait::hello insteadof EngineTrait;
        EngineTrait::hello as engineHello;
    }

    public function fly()
    {
        echo "I am flying at 800km/h speed" . PHP_EOL;
    }
}



$plain = new Plain();
$plain->fly();
$plain->hello();
$plain->engineHello();
