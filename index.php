<?php

require_once 'Bicycle.php';

    $bike = new Bicycle('blue', 1);

        
        var_dump($bike);

        echo $bike->forward();
        var_dump($bike->switchOn());
        echo '<br> Vitesse du vélo : ' . $bike->getCurrentSpeed() . ' km/h' . '<br>';
        echo $bike->brake();
        var_dump($bike->switchOff());
        echo '<br> Vitesse du vélo : ' . $bike->getCurrentSpeed() . ' km/h' . '<br>';
        echo $bike->brake();



require_once 'car.php';

    $car = new Car('red', 5, 'fuel');

    try {
        $car->start();
    }
    catch(Exception $e) {
        $car->setParkBrake(false);
    }
    finally {
        echo 'Ma voiture roule comme un donut';
    }
    
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

        echo $truck->getCurrentSpeed() . '<br>';
        echo $truck->isFull();

    $truck->load(0);
    $truck->load(1000);

        echo $truck->getCurrentLoad();

    $truck2 = new Truck('red', 2, 500);

        echo $truck2->getStorageCapacity();

require_once 'MotorWay.php';

    $motorWay = new MotorWay();
    $motorWay->addVehicle($car);
    $motorWay->addVehicle($bike);

        var_dump($motorWay->getCurrentVehicles());

        echo $motorWay->getNbLane() . '<br>';
        echo $motorWay->getMaxSpeed();

require_once 'PedestrianWay.php';
    
    $pedestrianWay = new PedestrianWay();
    $pedestrianWay->addVehicle($bike);

        var_dump($pedestrianWay->getCurrentVehicles());

    $pedestrianWay->addVehicle($car);

        var_dump($pedestrianWay->getCurrentVehicles());

require_once 'ResidentialWay.php';

    $residentialWay = new ResidentialWay();

        echo $residentialWay->getNbLane() . '<br>';
        echo $residentialWay->getMaxSpeed();
    
    $residentialWay->addVehicle($car);

        var_dump($residentialWay->getCurrentVehicles());

    $residentialWay->addVehicle($bike);

        var_dump($residentialWay->getCurrentVehicles());

require_once 'Speedometer.php';

        echo Speedometer::convertKmToMiles(10) . '<br>';
        echo Speedometer::convertMilesToKm(10);

require_once 'Personne.php';

    $personne = new Personne("Lopez", "Jennifer", "Paris", "1990-01-10");

        var_dump($personne->getNom());

    $personne->setNom("Lobes");

        var_dump($personne->getNom());

        var_dump($personne->getAge());