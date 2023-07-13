<?php

require_once 'Penguin.php';
require_once 'Bird.php';
require_once 'Duck.php';

$bird = new Bird();
$bird->fly();

$penguin = new Penguin();
$penguin->swim();

$duck = new Duck();
$duck->swim();
$duck->fly();

var_dump(canFly($bird));
var_dump(canFly($penguin)). PHP_EOL;
var_dump(canFly($duck)). PHP_EOL;

function canFly($object)
{
    if($object instanceof FlyableInterface){
        return true;
    }
        return false;
}