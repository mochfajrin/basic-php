<?

$age = null;

echo is_null($age) . "\n";
var_dump(is_null($age));

// remove variable

unset($age);

// '$age' no longer exists

echo $age;

var_dump(isset($age));
