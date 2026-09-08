<?php

require_once 'Bicycle.php';

$bike = new Bicycle('blue', 1);
var_dump($bike);

echo $bike->forward();
echo '<br> Vitesse du vélo : ' . $bike->getCurrentSpeed() . ' km/h' . '<br>';
echo $bike->brake();
echo '<br> Vitesse du vélo : ' . $bike->getCurrentSpeed() . ' km/h' . '<br>';
echo $bike->brake();



require_once 'car.php';

$car = new Car('red', 5, 'fuel');

$car->start();
$car->accelerate();

echo $car->getCurrentSpeed() . '<br>';

$car->brake();

echo $car->getCurrentSpeed() . '<br>';
echo $car->getEnergyType() . '<br>';
echo $car->getCurrentEnergyLevel() . '<br>';

require_once 'Truck.php';

$truck = new Truck ('blue',3 ,1000);

$truck->forward();
echo $truck->getCurrentSpeed();

$truck->brake();
echo $truck->getCurrentSpeed();

echo $truck->isFull();

$truck->load(0);
$truck->load(1000);

echo $truck->getCurrentLoad();

$truck2 = new Truck('red', 2, 500);

echo $truck2->getStorageCapacity();

