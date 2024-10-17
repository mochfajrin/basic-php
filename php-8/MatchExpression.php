<?php

$value = "D";

$result = match ($value) {
    "A", "B", "C" => "Anda lulus",
    "D" => "Anda tidak lulus",
    "E" => "Salah jurusan",
    default => "Nilai tidak diketahui"
};

echo $result . PHP_EOL;

$value = 50;

$result = match (true) {
    $value >= 80 => "A",
    $value >= 70 => "B",
    $value >= 60 => "C",
    $value >= 50 => "D",
    default => "E",
};

echo $result . PHP_EOL;

$name = "Mrs. Yukari";

$result = match (true) {
    str_contains($name, "Mr.") => "Hello sir",
    str_contains($name, "Mrs.") => "Hello ma",
    default => "Hello"
};

echo $result . PHP_EOL;
