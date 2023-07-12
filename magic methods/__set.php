<?php

class Person{
    public $name="Jane";
    private $phone = 123456;
    public function __set($propName, $value){
        var_dump($propName, $value);
    }

}

$p = new Person();
$p->username = 'Marry';
echo $p->name;