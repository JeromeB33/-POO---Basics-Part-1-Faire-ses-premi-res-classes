<?php

// cars.php


/**
 * [Description Cars]
 */
class Cars
{
private int $nbWheels = 4;

private int $currentSpeed;

private string $color;

private int $nbSeats;

private string $energy;

private int $energyLevel;

private bool $engineOn = false;


public function __construct(string $color, int $nbSeats, string $energy)
{
    $this->color = $color;
    $this->nbSeats = $nbSeats;
    $this->energy = $energy;
}

public function start()
{
    return $this->engineOn = true;
}

public function forward(): string
{
    if($this->engineOn == true){
    $this->currentSpeed = 50;

    return "Go !";
} else 
{
    return "Start your engine first !!";
}
}

public function brake(): string
{
    $sentence = "";
    while ($this->currentSpeed > 0) {
        $this->currentSpeed--;
        $sentence .= "Brake !!!";
    }
    $sentence .= "I'm stopped !";
    return $sentence;
}

public function getNbWheels(): int
{
    return $this->nbWheels;
}

public function getCurrentSpeed(): int
{
    return $this->currentSpeed;
}

public function getColor(): string
{
    return $this->color;
}

public function getNbSeats(): int
{
    return $this->nbSeats;
}

public function getEnergy(): string
{
    return $this->energy;
}

public function getEnergyLevel(): int
{
    return $this->energyLevel;
}

}
