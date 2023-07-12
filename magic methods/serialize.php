<?php

class Person
{
    public $name = "Jane";
    private $phone = 123456;

}

$p = new Person();
$serialized = serialize($p);

$newPerson = unserialize($serialized);
var_dump($newPerson);