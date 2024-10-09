<?php

class Product {
  protected string $name;
  protected float $price;
  private const string OWNER = "Yakumo";

  public function __construct(
    string $name, string $price){
      $this->name = $name;
      $this->price = $price;  
  }
  public function getName(): string {
    return $this->name;
  }
  public function getPrice(): string {
    return $this->price;
  }
}


class Plush extends Product {
  private string $size;
  
  public function __construct(
    string $name,
    string $price,
    string $size,
  ){
    $this->size = $size;
    parent::__construct($name, $price);
  }
  public function getInfo(): array {
    return [
      "name"=> $this->name,
      "price"=> $this->price,
      "size"=> $this->size
    ];
  }
}


$fumo = new Plush("Reimu", 59.99, "small");
echo $fumo->getInfo()["name"] . PHP_EOL;
