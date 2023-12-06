<?php

include "Car.php";
include "Train.php";
include "Cat.php";
include "Dog.php";
include "Math.php";

// $myCar = new Car("BMW", 0.01) ;
// $myTrain = new Train("shkoda", 23423 , 134) ;


// $myDog = new Dog("Reksis", 6) ;
// $myCat1 = new Cat("Mincis", 2) ;
// $myCat2 = new Cat("Brincis", 3) ;

// echo "<br>" . Dog::payAttention() ;
// Cat::payAttention() . "<br>" ;

echo Math::addTwo(4 , 9) . " addTwo". "<br><br>" ;
echo Math::factorial(37) . " factorial". "<br><br>" ;
echo Math::sum(7 , 3 , 6 , 35 , 2) ." sum". "<br><br>" ;
$visiMas = [7 , 3 , 6 , 35 , 2];