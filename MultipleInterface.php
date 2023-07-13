<?php

// Differences between an abstract class and interfaces:
// abstract class: - can have normal methods with body
//                 - can have methods with a protected visibility
//                  - when you extend from the abstract class, you can extend from one class only
//interface: - can't have normal methods with body
//           - can't have methods with a protected visibility
//           - can implement multiple interfaces

interface MyInterface1
{
    public function method1();
}
interface MyInterface2
{
    public function method2();
}

class MyClass1 implements MyInterface1, MyInterface2
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



//The public function method2(); is declared in MyInterface2 but can also be declared in MyInterface1 as long as there are no differences.
//For example, in MyInterface2, method2() is declared as method2():string; and in MyInterface1, it is declared as method2():int