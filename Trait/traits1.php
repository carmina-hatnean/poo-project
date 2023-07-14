<?php
//inheritance and traits together and overriding of methods


class A{
    public $var1 = 10;
    public function hello()
    {
        echo "Hello from class A".PHP_EOL;
    }
}

trait TraitA
{
    public function hello()
    {
        // echo "Hello from trait A" .' '. $this->var1 . PHP_EOL;
        echo "Hello from trait A" .' '. parent::hello() . PHP_EOL;
    }
}

class B extends A
{
    use TraitA;
}


$a = new B();
$a->hello();