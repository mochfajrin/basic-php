<?php

function sayHello(string $first, string $middle, string $last = "Miko"): void
{
    echo "Hello $first $middle $last" . PHP_EOL;
}

sayHello(middle: "no", first: "Toyosatomimi", last: "Miko");
sayHello(first: "Fujiwara", middle: "Mokou");
