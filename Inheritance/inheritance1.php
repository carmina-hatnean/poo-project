<?php

class ParentClass
{
    public $property1 = '1';
    protected $property2 = '2';
    private $property3 = '3';
    public function getProperty2(): string
    {
        return $this->property2;
    }
    public function printText(string $text)
    {
        echo $text;
    }

}

class ChildClass extends ParentClass
{
    public $property1 = '11';
    protected $property2 = "22";

    public function getProperty2(): string
    {
        $result = parent::getProperty2(); // TODO: Change the autogenerated stub
        return "Something" .$result;
    }
    public function printText(string $text)
    {
        echo $text;
    }

}

$obj = new ChildClass();
echo $obj->getProperty2();