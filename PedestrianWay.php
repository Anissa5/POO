<?php

require_once 'HighWay.php';
require_once 'Skateboard.php';
require_once 'Bicycle.php';

    class PedestrianWay extends HighWay
    {
        public function __construct()
        {
            parent::__construct(1, 10);
        }

        public function addVehicle(Vehicle $vehicle): void
        {
            if($vehicle instanceof Bicycle || $vehicle instanceof Skateboard) {
               $this->currentVehicles[] = $vehicle;
            }    
        }

    }