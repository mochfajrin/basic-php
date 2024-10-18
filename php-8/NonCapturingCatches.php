<?php

function validate(string $val)
{
    if (trim($val) == "") {
        throw new Exception("Invalid string");
    }
}

try {
    validate("");
} catch (Exception) {
    echo "Invalid" . PHP_EOL;
} finally {
    echo "Program executed" . PHP_EOL;
}

class User
{
    public string $name;
    public function __toString(): string
    {
        return "Hello";
    }
}

echo User::class . PHP_EOL;
$user = new User();
echo $user->__toString();

$val = "";
$validate = $val != "" ? "Good" : throw new Exception("String is empty");
