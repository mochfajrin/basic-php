<?php

// array to object

$array = ["firstName" => "Hakurei", "lastName" => "Reimu"];
$object = (object)$array;

var_dump($object);

echo $object->firstName . PHP_EOL;

$toArray = (array) $object;

var_dump($toArray);
echo $toArray["lastName"] . PHP_EOL;
