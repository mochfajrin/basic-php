<?php

trait SayHello
{
    public static function sayHello(string $name): void
    {
        echo "Hello $name" . PHP_EOL;
    }
}

trait SayGoodBye
{
    public static function sayGoodBye(string $name): void
    {
        echo "Good bye $name" . PHP_EOL;
    }
}

trait Greeting
{
    use SayHello, SayGoodBye;
}

abstract class Person
{
    protected string $name;
    public function setName(string $name): void
    {
        if (!is_string($name)) {
            die("Name must be string");
        }
        $this->name = $name;
    }
    public function getName(): string
    {
        return $this->name . PHP_EOL;
    }
}

class Employee extends Person
{
    use Greeting;
}

$employee = new Employee();
$employee->setName("Jhon");
echo $employee->getName();
var_dump($employee);
Employee::sayHello("Jhon");
Employee::sayGoodBye("Jhon");
