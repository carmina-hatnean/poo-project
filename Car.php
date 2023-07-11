<?php
//1. Creating classes, properties, methods
class Car{
    public $color='brown';
    public $weight;
    private $year;
    private $kilometers;

    private $availableColors = [
        'red', 'blue', 'yellow'
    ];
    private $availableKilometers = [
        '100000', '150000', '200000'
    ];

    private $number;

    public function SetYear($year){
        $this->year=$year;
    }
    public function GetYear(){
        return $this->year;
    }

    public function Setnrinmatriculare($number){
        $this->number=$number;
    }
    public function Getnrinmatriculare(){
        return $this->number;
    }
    public function setColor($index) {
        if (array_key_exists($index, $this->availableColors)) {
            $this->color = $this->availableColors[$index];
        }
    }

    public function setKilometers($kilometers){
        if(in_array($kilometers,$this->availableKilometers)){
            $this->kilometers=$kilometers;
        }
    }
    public function getKilometers(){
        return $this->kilometers;
    }

    public function getColor(){
        return $this->color;
    }
}

$Renault = new Car();
$Ford = new Car();
//$Ford->color='red';
//$Renault->color='blue';
$Renault->weight='200';
$Ford->weight=180;
$Ford->SetYear(2004);
$Renault->Setnrinmatriculare(123456789);
$Renault->setColor(2);
$Renault->setKilometers('100000');

echo $Renault->color . "\n";
echo $Renault->weight . "\n";
echo $Ford->weight . "\n";
echo $Ford->GetYear() . "\n";
echo $Renault->Getnrinmatriculare() . "\n";
echo $Renault->getColor()."\n";
echo $Renault->getKilometers();