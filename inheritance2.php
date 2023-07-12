<?php

class ParentClass
{
    public $property1 = '1';
    protected $property2 = '2';
    private $property3 = '3';
    const MY_CONSTANT = "MY_CONSTANT";
}

class ChildClass extends ParentClass
{
    public $property1 = '1';
    protected $property2 = '2';
}

$obj = new ChildClass();
echo ChildClass::MY_CONSTANT;