<?php

// matching

$matches = [];
$result = (bool)preg_match_all("/ammad|faj/i", "Mochammad Fajrin", $matches);
var_dump($result);
var_dump($matches);

// replace

$matches = [];
$result = preg_replace("/keparat|sialan/i", "***", "keparat lo sialan");
var_dump($result);
var_dump($matches);

// split

$result = preg_split("/[\s,-]/", "Mochammad Fajrin,MxE-RinZu");
var_dump($result);
