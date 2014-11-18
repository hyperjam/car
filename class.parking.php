<?php
// all files with class definithion
//require_once ('');
include ('class.car.php');
include('class.engine.php');
include('class.racecar.php');

   $myCar = new Car();
   $otherCar = new Car();
   
   $myCar->setNumberOfDors(4);
   $myCar->setColor('green');
   $myCar->setBrand('BMW');
   $myCar->setModel('picap');
   
   $otherCar->setNumberOfDors(5);
   $otherCar->setColor('blue');
   $otherCar->setBrand('Volkswagen');
   $otherCar->setModel('rangerover');
   
   echo ($myCar ->helloCar());
   echo ($otherCar->helloCar());
   
   function introduceCar(Car $c)
   {
   $c->setNumberOfDors(4);
   $c->setColor('green');
   $c->setBrand('BMW');
   $c->setModel('picap');
   $a = $c->getColor();
   $b = $c->getBrand();
   $c = $c->getModel();
   //$d = $c->getNumberOfDors();
   echo ("");
   return "Hello! This is me- your car: $a, $b, $c model. \n";
   }
   
   echo (introduceCar($myCar));
   $Racecar = new RaceCar(58,2);
   $Racecar->vMax();
   $Racecar->Acceleration();   
   $newengine = new Engine(180);
   $newengine->HP();
  
   
?>