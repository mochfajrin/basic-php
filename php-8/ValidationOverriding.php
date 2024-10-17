<?php

trait SampleTrait
{
    public abstract function sampleFunction(string $name): void;
}

class Manager
{
    private function test(): void {}
}

class SampleTraitImpl
{
    use SampleTrait;
    // this is not allowed on php 7
    private function test(): string
    {
        return "";
    }
    public function sampleFunction(string $name): void {}
    // error
    // public function sampleFunction(string $name): string {}
}
