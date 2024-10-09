<?php

require_once "./abstract.php";

use Venichle\{Car};

class Toyota extends Car {
  public string $name;
  public function getName(): string {
    return $this->name;
  }
  public function setName(string $name): void {
    if (is_null($name)) {
      throw new Exception("name cannot be null");
    }
    if (!is_string($name)) {
      throw new Exception("name must be string");
    }
    $this->name = $name;
  }
  public function startEngine(): void {
    echo "Engine start";
  }
}

$kijang = new Toyota();

$kijang->setName("Udin");

echo $kijang->startEngine() . PHP_EOL;

$kijang->setName(1);

var_dump($kijang);
