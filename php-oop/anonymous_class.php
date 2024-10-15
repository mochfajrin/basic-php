<?php

interface SayHello
{
    public function sayHello(): void;
}

$sayHello = new class("Reimu") implements SayHello {
    public string $name;
    public function __construct(string $name)
    {
        $this->name = $name;
    }
    public function sayHello(): void
    {
        echo "Hello my name is $this->name";
    }
};

$sayHello->sayHello();
