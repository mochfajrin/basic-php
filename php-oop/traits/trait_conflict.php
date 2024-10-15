<?php

trait A
{
    public static function doA(): void
    {
        echo "a" . PHP_EOL;
    }
    public static function doB(): void
    {
        echo "b" . PHP_EOL;
    }
}

trait B
{
    public static function doA(): void
    {
        echo "A" . PHP_EOL;
    }
    public static function doB(): void
    {
        echo "B" . PHP_EOL;
    }
}
/* this will throw error because name conflict

class Test
{
    use A, B;
}
Test::doA();
*/

// this is how to solve

class Test
{
    use A, B {
        A::doA insteadof B;
        B::doB insteadof A;
        B::doB as private;
    }
}

Test::doA();
Test::doB();
