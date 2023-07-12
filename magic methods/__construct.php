<?php
//PHP magic methods
// metodele magice se apeleaza automat in anumite circumstante
//metodele magice trebuie mereu declarate public

class Person
{
    public $name="Jane";
    private $phone=123456;

    public function __construct()
    {
        echo " __construct is called" . PHP_EOL;
    }
    public function __destruct()
    {
        echo " __destruct is called" . PHP_EOL;
    }
    public function __toString()
    {
        return "Name: $this->name . Phone: $this->phone" . PHP_EOL;
    }
}

$p = new Person();
echo $p;

















































