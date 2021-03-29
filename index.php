<?php

require_once 'Bicycle.php';
require_once 'Car.php';

$bike = new Bicycle();
/*var_dump($bike);*/
$bike->setColor = 'blue';
$bike->setCurrentSpeed = 0;
/*var_dump($bike); // then, another dump.*/

// Moving bike
echo $bike->forward();
echo '<br> Vitesse du vélo : ' . $bike->setCurrentSpeed . ' km/h' . '<br>';
echo $bike->brake();
echo '<br> Vitesse du vélo : ' . $bike->setCurrentSpeed . ' km/h' . '<br>';
echo $bike->brake();

// Instanciation d'un nouvel objet $rockrider
$rockrider = new Bicycle();
$rockrider->setColor = 'yellow';
$rockrider->setCurrentSpeed = 30;

// Instanciation d'un nouvel objet $tornado
$tornado = new Bicycle();
$tornado->setColor = 'black';
$tornado->setCurrentSpeed = 50;

echo $rockrider->forward();
echo '<br> Vitesse du vélo de couleur ' . $rockrider->setColor .' : ' . $rockrider->setCurrentSpeed . ' km/h' . '<br>';
echo $rockrider->brake();

echo $tornado->forward();
echo '<br> Vitesse du vélo de couleur  ' . $tornado->setColor .' : ' . $tornado->setCurrentSpeed . ' km/h' . '<br>';
echo $tornado->brake();

// CAR
$car = new Car();
$car->setColor= "white";
$car->setCurrentSpeed = 90;


$k2000 = new Car();
$k2000->setColor= "black";
$k2000->setCurrentSpeed = 300;

echo $car->forward();
echo '<br><br> Vitesse de la voiture de couleur ' . $car->setColor .' : ' . $car->setCurrentSpeed . ' km/h' . '<br>';
echo $car->brake();
echo '<br><br><br>';

echo $k2000->forward();
echo '<br> Vitesse de la voiture de k2000 : ' . $k2000->setCurrentSpeed . ' km/h' . '<br>';
echo $car->forward();
echo $car->forward();
echo $car->forward();
echo $car->forward();