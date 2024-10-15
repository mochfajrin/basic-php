<?php

function getEven(int $max)
{
    $array = [];
    for ($i = 0; $i < $max; $i++) {
        if ($i % 2 == 0) {
            array_push($array, $i);
        }
    }
    return new ArrayIterator($array);
}
function getOdd(int $max): Iterator
{
    for ($i = 0; $i < $max; $i++) {
        if ($i % 2 != 0) {
            yield $i;
        }
    }
}

var_dump(getEven(10));

echo getOdd(10)->next();

foreach (getEven(10) as $value) {
    echo "Even : $value" . PHP_EOL;
}

var_dump(getOdd(10));
foreach (getOdd(10) as $value) {
    echo "Odd : $value" . PHP_EOL;
}
