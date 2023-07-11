<?php
//Class Constants in PHP
class Car{
    public $color;
    public $manufacturer;

    const MANUFACTURER_BMW = 'BMW';
    const MANUFACTURER_TESLA = 'tesla';

    const MANUFACTURER_MERCEDES = 'mercedes';

    const COLOR_RED = 'red';
    const COLOR_GREEN = 'green';
    const COLOR_BLUE = 'blue';

    public function __construct($color, $manufacturer){
        $this->color=$color;
        $this->manufacturer=$manufacturer;
    }

}

$myCar= new Car('red','mercedes');
$myCar2= new Car(Car::COLOR_BLUE,Car::MANUFACTURER_MERCEDES);
var_dump($myCar);
var_dump($myCar2);

//=========================================================================================

    class MyClass
    {
        const CONSTANT = 'constant value';

        function showConstant() {
            echo  self::CONSTANT . "\n";
        }
    }

    echo MyClass::CONSTANT . "\n";

    $classname = "MyClass";
    echo $classname::CONSTANT . "\n";

    $class = new MyClass();
    $class->showConstant();

    echo $class::CONSTANT."\n";

    //==============================================================

