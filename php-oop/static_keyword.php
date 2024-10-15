<?php

class MathHelper
{
    const NAME = "Math Helper";
    public static function sum(string ...$numbers): float
    {
        $total = 0;
        foreach ($numbers as $number) {
            $total += $number;
        }
        return $total;
    }
}

echo MathHelper::NAME . PHP_EOL;
echo MathHelper::sum(1, 2, 3);
