<?php

// covariance

abstract class Animal
{
    public string $name;
    abstract public function run(): void;
    abstract public function eat(AnimalFood $animalFood): void;
}

class Cat extends Animal
{
    public function run(): void
    {
        echo "Cat is running";
    }
    public function eat(AnimalFood $animalFood): void
    {
        echo "Cat is eating";
    }
}

class Dog extends Animal
{
    public function run(): void
    {
        echo "Dog is running";
    }
    // Contravariance, dog can eat various food as long the Class is child of Food class
    public function eat(Food $animalFood): void
    {
        echo "Dog is eating";
    }
}

interface AnimalShelter
{
    function adopt(string $name): Animal;
}

class CatShelter implements AnimalShelter
{
    // specific return (covariance) 
    public function adopt(string $name): Cat
    {
        $cat = new Cat();
        $cat->name = $name;
        return $cat;
    }
}

class DogShelter implements AnimalShelter
{
    // specific return (covariance) as long return type is child of animals
    public function adopt(string $name): Dog
    {
        $cat = new Dog();
        $cat->name = $name;
        return $cat;
    }
}


$catShelter = new CatShelter();
$cat = $catShelter->adopt("Myon");

var_dump($cat);

// contra variance

class Food {}

class AnimalFood extends Food {}

$dogShelter = new DogShelter();
$dog = $dogShelter->adopt("Doge");
$dog->eat(new Food());
