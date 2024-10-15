<?php

class Person implements IteratorAggregate
{
    public string $name = "person";
    public string $city = "lamongan";
    private string $creditCard = "1234 5678 9101 1112";
    protected string $parentName = "parent person";

    /* using iterator
    public function getIterator(): Traversable
    {
        return new ArrayIterator([
            "name" => $this->name,
            "city" => $this->city,
            "creditCard" => $this->creditCard,
            "parentName" => $this->parentName
            ]);
            }
    */


    // using generator

    public function getIterator(): Traversable
    {
        yield "name" => $this->name;
        yield "city" => $this->city;
        yield "creditCard" => $this->creditCard;
        yield "parentName" => $this->parentName;
    }
}

$data = new Person();


foreach ($data as $prop => $value) {
    echo "$prop : $value" . PHP_EOL;
}
