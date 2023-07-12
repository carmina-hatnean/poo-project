<?php

class ParentClass
{
    public $property1 = '1';
    protected $property2 = '2';
    private $property3 = '3';
    private const MY_CONSTANT = "MY_CONSTANT";
}

class ChildClass extends ParentClass
{
    public $property1 = '11';
    protected $property2 = '22';
    public static function getConstant()
    {
//        return self::MY_CONSTANT;
    }
}

$obj = new ChildClass();
echo ChildClass::getConstant();

//revazut