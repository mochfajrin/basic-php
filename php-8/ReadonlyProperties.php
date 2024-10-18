<?php

class User
{
    public readonly string $id;
    public readonly string $name;
    public function __construct(string $id, string $name)
    {
        $this->id = $id;
        $this->name = $name;
    }
}

class UserPromoted
{
    public function __construct(
        public readonly string $id,
        public readonly User $user = new User("1", "No Name")
    ) {}
}

$user = new User("1", "Reimu");
var_dump($user);
// $user->id = "";
$user = new UserPromoted("1");
var_dump($user);
