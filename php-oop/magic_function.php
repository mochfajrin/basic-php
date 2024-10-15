<?php

require_once("./modules/person.php");

$reimu = new Person();
$reimu->id = "1";
$reimu->name = "Reimu";
$reimu->age = 12;
$reimu->setSample("sample");

// __toString()

$string = (string) $reimu;
echo $string . PHP_EOL;
echo $reimu . PHP_EOL;

// __invoke()

echo $reimu("a", "b", true, 1);

// __debugInfo()

var_dump($reimu);
