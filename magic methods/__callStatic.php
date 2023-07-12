<?php

class Person
{
    public $name = "Jane";
    private $phone = 123456;

    public static function __callStatic($name, $arguments)
    {
        echo "\" $name \" static method was called";
    }



}

$p = new Person();
Person::hello();