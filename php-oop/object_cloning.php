<?php

require_once("./modules/person.php");

$student = new Person();
$student->id = "123abc";
$student->name = "Jhon Doe";
$student->age = 10;
$student->setSample("xxx");


$newStudent = clone $student;

var_dump($student);
var_dump($newStudent);

// $newStudent => clone $student => $student->__clone();
