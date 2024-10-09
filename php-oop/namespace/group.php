<?php

require_once("./lib.php");

use Data\One\ {
  Conflict,
  Math
};

use Data\Two\ {
  Conflict as ConflictTwo
};

$reimu = new Conflict();
$sanae = new ConflictTwo();

var_dump($reimu);
$reimu->sayHello();
$sanae->sayHello();

echo Math::add(1, 2) . PHP_EOL;

