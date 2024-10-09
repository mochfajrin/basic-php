<?php

// namespace Venichle;

interface Engine {
  // public string $engineName;
  
  public function startEngine(): void;
}

interface Brake {
  // public string $brakeName;

  public function brake(): void;
}

class Car implements Engine, Brake {
  public string $engineName;
  public string $name;
  public function startEngine(): void {
    echo "Engine start...";
  }
  public function brake(): void {
    echo "Brake the car";
  }
}

$toyota = new Car();

$toyota->name = "Kijang";

echo $toyota->name;
