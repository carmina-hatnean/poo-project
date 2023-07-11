<?php
// Static properties
class Car{
    public $color = 'red';
    private $weight=2000;
    // O variabilă statică aparține clasei în sine, nu unei instanțe specifice a clasei
    static $counter = 0;
    public $myCounter = 0;

    public function __construct(){
        $this->myCounter++;
        self::$counter++;
    }

}

$myCar=new Car();
echo Car::$counter. ' ' . $myCar->myCounter . PHP_EOL;
$myCar2=new Car();
echo Car::$counter. ' ' . $myCar2->myCounter . PHP_EOL;


//==============================================================================================

//Static methods


class Auto
{
    private $color = 'red';
    private $weight = 2000;
    static private $availableColors = [
        'red', 'green', 'blue', 'white'
    ];
// "$this" este o variabilă specială care face referire la instanța curentă a unei clase.
    public static function getAvailableColors(){
        //"self" este un identificator rezervat utilizat pentru a face referire la clasa în sine.
        return self::$availableColors;
    }
}


$myAuto = new Auto();
Auto::getAvailableColors();


//=================================================================================================


// Clasa elStatic
class elStatic {
    // Definire proprietati statice
    static private $site = 'marplo.net';        // Privata
    static public $id = 78;                       // Publica

    // Constructor
    public function __construct($site) {
        // Daca parametru $site e de tip String si cel putin 4 caractere
        // Atribuie valoarea la proprietatea "site" si apeleaza metoda getProp()
        // Altfel, seteaza un mesaj de eroare
        if(is_string($site) && strlen($site)>3) {
            elStatic::$site = $site;
            self::getProp();             // Apelare prin cuvantul special  self
        }
        else throw new Exception('Valoare incorecta pt. site');
    }

    // Metoda statica
    static public function getProp() {
        // Afiseaza valoarea proprietatilor statice (folosind numele clasei, dar si cuvantul  self )
        echo '<br /> ID = '. elStatic::$id. ' - site: '. self::$site;
    }
}
echo elStatic::$id;        // Afiseaza valoarea proprietatii statice "id"
elStatic::getProp();       // Apeleaza metoda statica getProp()

elStatic::$id = 89;       // Modifica valoarea proprietatii statice "id"

// Creare Instanta la clasa elStatic
$obj = new elStatic('www.google.com');














