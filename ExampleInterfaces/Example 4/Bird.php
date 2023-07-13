
<?php


require_once 'FlyableInterface.php';

class Bird implements FlyableInterface
{
    public function fly()
    {
        echo "I am Bird. I can fly" . PHP_EOL;
    }
}