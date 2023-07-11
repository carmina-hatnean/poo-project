<?php

class Car
{
    public $color = 'brown';
    public $weight;
    private $year;
}

$car=new Car();
// ambele variabile se refera la acelasi obiect
$car2 = & $car;
//daca am fi avut $car2=$car
//fiecare variabilă ar fi ținut spre o locație de memorie și obiecte separate.
//Asta înseamnă că orice modificări făcute pe un obiect prin intermediul unei variabile nu ar fi afectat celălalt obiect
$car->color="red";
$car2->color="green";
$car5=new Car();
$car6 =$car5;

echo var_dump($car);
echo var_dump($car2);


$car6=clone $car5;
$car6->color='green';
var_dump($car5);

//Avem  3 cazuri:

//1. $car2 = $car;
//se face o copie a valorii variabilei $car și această valoare este atribuită variabilei $car2
// locatie: aceiasi
// obiect: acelasi
// modificare: se reflecta in ambele

// 2. $car2 = & $car;
// se atribuie direct o referință către obiectul din variabila $car variabilei $car2
// locatie: aceiasi
// obiect: acelasi
// modificare: se reflecta in ambele

// 3. $car2 = clone $car;
// locatie: diferita
// obiect: diferit
// modificare: nu va afecta $car și viceversa