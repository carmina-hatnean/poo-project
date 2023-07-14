<?php

trait Children1
{
    public function greeting1(){
        echo "Good Morning!". PHP_EOL;
    }
}
trait Children2
{
    public function greeting2(){
        echo "Good Afternoon!".PHP_EOL;
    }
}

trait Children3
{
    use Children1, Children2;

    public function greeting3()
    {
        echo "Good Evening!".PHP_EOL;
    }
}

class Greetings
{
    use Children3;
}

$childrenA = new Greetings();
$childrenA->greeting1();
$childrenA->greeting2();
$childrenA->greeting3();