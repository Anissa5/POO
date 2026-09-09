<?php


require_once 'Vehicle.php';

class Car extends Vehicle {

public const ALLOWED_ENERGIES = [
    'fuel',
    'electric',
];
   
    private string $energyType;
    private int $currentEnergyLevel;
    private bool $hasParkBrake;

    public function __construct(string $color, int $numberOfSeats, string $energyType) 
    {
       parent::__construct($color, $numberOfSeats);

        $this->setEnergy($energyType);
        $this->currentEnergyLevel = 100;
        $this->hasParkBrake = true;
    }

    public function setParkBrake(bool $parkBrake): void
    {
        $this->hasParkBrake = $parkBrake;
    }

    public function start (): void 
    {
        if($this->hasParkBrake) {
            throw new Exception('Le frein à main est activé');
        }
        $this->currentSpeed = 0;
    }

    public function accelerate ()
    {
        $this->currentSpeed += 10;
    }

    public function setEnergy(string $energy): Car
    {   if (in_array($energy, self::ALLOWED_ENERGIES)) {
        $this->energyType = $energy;
    }
        return $this;
    }

    public function getEnergyType(): string 
    {
        return $this->energyType;
    }

    public function getCurrentEnergyLevel(): int 
    {
        return $this->currentEnergyLevel;
    }
}   