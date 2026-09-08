<?php

require_once 'Vehicle.php';

class Truck extends Vehicle {

    private int $storageCapacity;
    private int $currentLoad;

    public function __construct(string $color, int $numberOfSeats, int $storageCapacity) 
    {
        parent::__construct($color, $numberOfSeats);

        $this->storageCapacity = $storageCapacity;
        $this->currentLoad = 0;
    }

    public function isFull(): string
    {   
        if($this->currentLoad == $this->storageCapacity) {
            return 'full';
        } else {
            return 'in filling';
        }
    }

    public function getStorageCapacity(): int
    {
        return $this->storageCapacity;
    }

    public function setStorageCapacity(int $storageCapacity): void
    {
        $this->storageCapacity = $storageCapacity;
    }

    public function getCurrentLoad(): int
    {
        return $this->currentLoad;
    }

    public function setCurrentLoad(int $currentLoad): void 
    {
        $this->currentLoad = $currentLoad;
    }

    public function load(int $quantity): void 
    {
        if ($this->currentLoad + $quantity <= $this->storageCapacity) {
            $this->currentLoad += $quantity;
        }
    }


}