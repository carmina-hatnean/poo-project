<?php

class Person{
    public $name="Jane";
    private $phone = 123456;

    public function __call($name,$arguments){
        if($name === 'getMobilePhone'){
            return $this->getPhone();
        }else if($name === 'setMobilePhone'){
            call_user_func_array([$this, 'setPhone'], $arguments[0]);
        }
    }

    public function getPhone(){
        return $this->phone;
    }
    public function setPhone($phone){
        $this->phone = $phone;
    }
}

$p = new Person();
echo $p->getMobilePhone();
$p->setMobilePhone('111111');
echo $p->getMobilePhone();