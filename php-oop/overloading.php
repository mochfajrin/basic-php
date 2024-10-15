<?php

class Zero
{
    private array $properties = [];

    // property overloading

    public function greet()
    {
        return "HI";
    }
    public function __get(string $name): mixed
    {
        return $this->properties[$name];
    }
    public function __set(string $name, mixed $value): void
    {
        $this->properties[$name] = $value;
    }
    public function __isset($name): bool
    {
        return isset($this->properties[$name]);
    }
    public function __unset($name): void
    {
        unset($this->properties[$name]);
    }

    // function overloading

    public function __call($name, $arguments): void
    {
        $join = join(", ", $arguments);
        echo "Call function $name with arguments $join" . PHP_EOL;
    }

    public static function __callStatic($name, $arguments): void
    {
        $join = join(", ", $arguments);
        echo "Call static function $name with arguments $join" . PHP_EOL;
    }
}

$zero = new Zero();
$zero->name = "Nue Houjuu" . PHP_EOL;
echo $zero->name;
var_dump(isset($zero->name));
unset($zero->name);
var_dump(isset($zero->name));

echo $zero->greet() . PHP_EOL;
$zero->sayHello("Reimu");
Zero::sayHello("Reimu");
