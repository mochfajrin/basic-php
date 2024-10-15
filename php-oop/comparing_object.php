<?php

require_once("./modules/person.php");

$reimu = new Person();
$reimu->id = "1";
$reimu->name = "Reimu";
$reimu->age = 12;

$mokou = new Person();
$reimu->id = "1";
$reimu->name = "Reimu";
$reimu->age = 12;

// equals
var_dump($reimu == $mokou);

// identity
var_dump($reimu === $mokou);
