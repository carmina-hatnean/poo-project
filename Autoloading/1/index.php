<?php
spl_autoload_register(function ($className){

});

include "Class1.php";
include "ns1/User.php";
include "ns1/subns1/ClassSubns1.php";
include "ns2/subns1/ClassSubns2.php";
include "ns2/ClassSubns2.php";

$user = new \Class1();
$user = new \ns1\User();
$user = new \ns1\subns1\ClassSubns1();
$user = new \ns1\subns2\ClassSubns2();
$user = new \ns2\ClassSubns2();

//3:39 https://www.youtube.com/watch?v=FCHWAyUDXik&ab_channel=TheCodeholic