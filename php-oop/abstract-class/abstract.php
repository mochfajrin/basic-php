<?php

namespace Venichle;

abstract class Car {
  private string $name;
  
  abstract public function getName(): string;
  abstract public function setName(string $name): void;
  abstract public function startEngine(): void;
}


class Toyota extends Car {
  public string $name;

  public function getName(): string {
    return $this->name;
  }

  public function setName(string $name): void {
    $this->name = $name;
  }
  

  public function startEngine(): void {
    echo "Engine start";
  }
}
