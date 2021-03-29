<?php
// index.php

require_once 'Bicycle.php';
$bike = new Bicycle('blue');
var_dump($bike);



// Moving bike
echo $bike->forward();
echo '<br> Vitesse du vélo : ' . $bike->getCurrentSpeed() . ' km/h' . '</br>';
echo $bike->brake();
echo '<br> Vitesse du vélo : ' . $bike->getCurrentSpeed() . ' km/h' . '</br>';
echo $bike->brake();

echo "<br/>";

// Instanciation d'un nouvel objet $rockrider
$rockrider = new Bicycle('black');


// Instanciation d'un nouvel objet $tornado
$tornado = new Bicycle('yellow');



echo "<br/>";
require_once 'cars.php';
$car = new Cars('green', 5, "fuel");
echo $car->forward();
echo $car->start();
echo $car->forward();
echo '<br> Vitesse de la voiture : ' . $car->getCurrentSpeed() . ' km/h' . '</br>';
echo $car->brake();
echo '<br> Vitesse de la voiture : ' . $car->getCurrentSpeed() . ' km/h' . '</br>';
echo $car->brake();
