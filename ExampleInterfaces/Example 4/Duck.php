<?php

require_once 'FlyableInterface.php';
require_once 'SwimmableInterface.php';

class Duck implements FlyableInterface, SwimmableInterface
{
    public function swim()
    {
        echo "I am Duck. I can swim" . PHP_EOL;
    }

    public function fly()
    {
        echo "I am Duck. I can fly" . PHP_EOL;
    }
}
