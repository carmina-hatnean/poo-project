<?php

class Person
{
    public $name = "Jane";
    private $phone = 123456;

    public function __sleep(){
        unset($this->phone);
        return ['name'];

    }
    public function __wakeup(){
        echo "I am waking up";
    }



}

$p = new Person("Jane", "123456");
$serialized = serialize($p);
$newPerson = unserialize($serialized);
var_dump($newPerson);