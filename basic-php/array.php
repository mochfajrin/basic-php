<?

$animes = array(
    [
        "name" => "jhon doe",
        "age" => 16
    ],
    [
        "name" => "spider man",
        "age" => 18
    ]

);

var_dump($animes);
var_dump($animes[0]);

foreach ($animes as $anime) {
    echo "Your name is " . $anime["name"] . " Your age is {$anime["age"]}\n";
}
