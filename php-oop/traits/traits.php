<?php

namespace Venicle;

abstract class LandVenicle {
  protected bool $hasWheels;

  public abstract function setHasWheels(bool $hasWheels): void;
  public abstract function getHasWheels(): bool;
}

trait Engine {
  public function startEngine(): void {
    echo "engine start..." . PHP_EOL;
  }
}

trait Brake {
  public function startBrake(): void {
    echo "brake" . PHP_EOL;
  }
}

class Car extends LandVenicle {
  use Engine, Brake;

  protected string $plateNumber;

  public function setHasWheels(bool $hasWheels): void {
    $this->hasWheels = $hasWheels;
  }
  public function getHasWheels(): bool {
    return $this->hasWheels;
  }
  public function setPlateNumber(string $plateNumber): void {
    $this->plateNumber = $plateNumber;
  }
  public function getPlateNumber(): string {
    return $this->number;
  }
}

$toyota = new Car();

$toyota->setPlateNumber("P2001");
$toyota->setHasWheels(true);
$toyota->startEngine();
$toyota->startBrake();

var_dump($toyota);
