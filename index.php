<?php

require_once 'Bicycle.php';

$bike = new Bicycle('blue');
var_dump($bike);

$bike->setColor('blue');
var_dump($bike);

echo $bike->forward();
echo '<br> Vitesse du vélo : ' . $bike->getCurrentSpeed() . ' km/h' . '<br>';
echo $bike->brake();
echo '<br> Vitesse du vélo : ' . $bike->getCurrentSpeed() . ' km/h' . '<br>';
echo $bike->brake();



require_once 'car.php';

$car = new Car('red', 5, 'gasoline');

$car->start();
$car->accelerate();

echo $car->getCurrentSpeed() . '<br>';

$car->brake();

echo $car->getCurrentSpeed() . '<br>';
echo $car->getNumberOfWheels() . '<br>';
echo $car->getColor() . '<br>';
echo $car->getNumberOfSeats() . '<br>';
echo $car->getEnergyType() . '<br>';
echo $car->getCurrentEnergyLevel() . '<br>';

