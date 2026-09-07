<?php

class Car {
    private int $numberOfWheels;
    private int $currentSpeed;
    private string $color;
    private int $numberOfSeats;
    private string $energyType;
    private int $currentEnergyLevel;

    public function __construct(string $color, int $numberOfSeats, string $energyType) 
    {
        $this->numberOfWheels = 4;
        $this->currentSpeed = 0;
        $this->color = $color;
        $this->numberOfSeats = $numberOfSeats;
        $this->energyType = $energyType;
        $this->currentEnergyLevel = 100;
    }

    public function start ()
    {
        $this->currentSpeed = 0;
    }

    public function accelerate ()
    {
        $this->currentSpeed += 10;
    }

    public function brake ()
    {
        $this->currentSpeed -= 10;
    }

    public function getNumberOfWheels(): int
    {
        return $this->numberOfWheels;
    }

    public function getCurrentSpeed(): int 
    {
        return $this->currentSpeed;
    }

    public function getColor(): string
    {
        return $this->color;
    }

    public function getNumberOfSeats(): int 
    {
        return $this->numberOfSeats;
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