<?php
class Person
{
    public $name = "Jane";
    private $phone = 123456;

    public function __construct($name, $phone)
    {
        $this->name=$name;
        $this->phone=$phone;
    }

}

$p = new Person("Jane", "123456");

$newPerson = clone $p;