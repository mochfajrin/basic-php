<?php

class Address
{
    public ?string $country;
}

class User
{
    public ?string $address;
}

function getCountry(?User $user)
{
    return $user?->address?->country;
}

$user = new User();
echo getCountry($user);
