<?php

require_once("./lib.php");

use Data\One\Conflict as Conflict;
use Data\Two\Conflict as ConflictTwo;
use function Data\One\helpMe as helpMe;
use const Data\One\COUNTRY as COUNTRY;

$reimu = new Conflict();
$sanae = new ConflictTwo();
var_dump($reimu);
$reimu->sayHello();
helpMe();
echo COUNTRY;
$sanae->sayHello();
