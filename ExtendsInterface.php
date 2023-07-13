<?php
// An interface can extend each other interface
// interfaces can extend from multiple interfaces which is not possible in case of classes
interface MyInterface1
{
    public function method1();
}
interface MyInterface03
{
    public function method3();
}
interface MyInterface2 extends MyInterface1, MyInterface03
{
    public function method2();
}

class MyClass01 implements MyInterface1
{

    public function method1()
    {
        // TODO: Implement method1() method.
    }

    public function method2()
    {
        // TODO: Implement method2() method.
    }
}

$myClass=new MyClass1();



