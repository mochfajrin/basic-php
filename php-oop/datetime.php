<?php

$dateTime = new DateTime();
$dateTime->setTimezone(new DateTimeZone("Asia/Jakarta"));
var_dump($dateTime);

// dateinterval

$dateTime->add(new DateInterval("P1Y"));
var_dump($dateTime);

// invert

$minus = new DateInterval("P10Y");
$minus->invert = 1;
$dateTime->add($minus);
var_dump($dateTime);

// format datetime

$now = new DateTime();
$now->setTimezone(new DateTimeZone("Asia/Jakarta"));
$string = $now->format("Y-m-d H:i:s");
echo "Current time is $string";

// custom format

$date = DateTime::createFromFormat("Y-m-d H:i:s", "2020-10-10 10:10:10", new DateTimeZone("Asia/Jakarta"));
var_dump($date);
