<?php

class Person
{
    public string $id;
    public string $name;
    public int $age;
    private string $sample;
    public function setSample(string $sample): void
    {
        $this->sample = $sample;
    }
    public function __clone(): void
    {
        // modified clone property
        unset($this->sample);
    }
    public function __toString(): string
    {
        return "Person id: $this->id, name: $this->name, age: $this->age";
    }
    public function __invoke(...$args): string
    {
        $join = join(", ", $args);
        return "Invoke student with args : $join";
    }
    public function __debugInfo()
    {
        return [
            "id" => $this->id,
            "name" => $this->name,
            "age" => $this->age,
            "sample" => $this->sample,
            "version" => "1.0.0"
        ];
    }
}
