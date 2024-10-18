<?php


// PHP 8.1
// can use trait, interface, const, method
enum Gender: string
{
    case Male = "Mr";
    case Female = "Mrs";
}

class Customer
{
    public function __construct(public string $name, public Gender $gender) {}
}

$customer = new Customer("Reimu", Gender::Female);
var_dump($customer);

var_dump(Gender::cases());
echo Gender::Female->value . PHP_EOL;
echo Gender::from("Mr")->value . PHP_EOL;
