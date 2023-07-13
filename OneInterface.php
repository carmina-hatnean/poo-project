<?php
// Part 1. What is an interface
//           How to create and implement it
// Part 2. Examples

interface MyInterface
{   //all the methods must be public
    const MY_CONSTANT = 1;
    public function __construct();
    public function method1();
    public function method2();

}

abstract class MyClass implements MyInterface
{
    public function method2()
    {
        // TODO: Implement method1() method.
    }
    public function __construct()
    {

    }
}
class MyClass2 extends MyClass
{

    public function method1()
    {
        // TODO: Implement method1() method.
    }
}


$myClass = new MyClass2();
echo MyInterface::MY_CONSTANT;