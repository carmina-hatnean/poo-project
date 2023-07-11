<?php
//PHP magic methods

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

//====================================================================

Class Person1{
    public $name = "Jane";
    private $phone = 123456;
    public function __get($propName)
    {
        if($propName === 'username'){
            return $this->name;
        }
        return "Property \"$propName\" does not exist";
    }

}

$p = new Person1();
echo $p->username;

//=====================================================================
// __set()
class Person2{
    public $name="Jane";
    private $phone = 123456;
    public function __set($propName, $value){
        var_dump($propName, $value);
    }

}

$p = new Person2();
$p->username = 'Marry';
echo $p->name;

//=========================================================================

// __call()
class Person3{
    public $name="Jane";
    private $phone = 123456;

    public function __call($name,$arguments){

    }

    public function getPhone(){
        return $this->phone;
    }
    public function setPhone($phone){
        $this->phone = $phone;
    }
}

$p = new Person3();
echo $p->getMobilePhone();
$p->setMobilePhone('111111');

// 9:27 https://www.youtube.com/watch?v=3dsI2xLgvL8&ab_channel=TheCodeholic





























