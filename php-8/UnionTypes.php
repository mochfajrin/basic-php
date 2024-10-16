<?php

class Example
{
    public int|bool|string|array $data;
}

$example = new Example();

$example->data = "1";
$example->data = true;
$example->data = 1;
$example->data = [1];
