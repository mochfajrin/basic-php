<?php

class Product
{
    public function __construct(
        public string $id,
        public string $name,
        public int $price,
        public int $qty,
        private bool $isExpensive
    ) {}
}

$product = new Product(id: "1", name: "Ketchup", price: 1000, qty: 10, isExpensive: false);
var_dump($product);
