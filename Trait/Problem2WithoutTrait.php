<?php


//traits solve two big problems in Php:
//1. code duplication
//2. single inheritance problem

class Flyable
{
    public function fly()
    {
        echo "I am flying" . PHP_EOL;
    }

    public function hello()
    {
        echo " I have an engine!";
    }
}

class Plain extends Flyable
{

}

class Helicopter extends Flyable
{

}

class Car
{
    public function hello()
    {
        echo " I have an engine!";
    }
}
$plain = new Plain();
$helicopter = new Helicopter();
$plain->fly();
$helicopter->fly();