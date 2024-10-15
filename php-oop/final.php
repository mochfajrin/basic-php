<?php

// final class (cannot be inherit)

class SocialMedia
{
    public string $name;
}

final class Facebook extends SocialMedia {}

/* error
class FakeFacebook extends Facebook {}
echo new FakeFacebook();
*/


// final function (cannot be override)

class Instagram extends SocialMedia
{
    final public function login(string $name, string $password): bool
    {
        return true;
    }
}

/* error
class FakeInstagram extends Instagram
{
    public function login(): bool
    {
        return true;
    }
}
*/