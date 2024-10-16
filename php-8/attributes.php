<?php

#[Attribute(Attribute::TARGET_PROPERTY)]
class NotBlank {}

#[Attribute(Attribute::TARGET_PARAMETER | Attribute::TARGET_PROPERTY)]
class Length
{
    public int $min;
    public int $max;

    public function __construct(int $min, int $max)
    {
        $this->min = $min;
        $this->max = $max;
    }
}

class LoginRequest
{
    #[NotBlank]
    #[Length(min: 5, max: 10)]
    public ?string $username;
    #[NotBlank]
    #[Length(min: 8, max: 10)]
    public ?string $password;
}

function validate(object $object): void
{
    $class = new ReflectionClass($object);
    $properties = $class->getProperties();
    foreach ($properties as $prop) {
        validateNotBlank($prop, $object);
        validateLength($prop, $object);
    }
}
function validateNotBlank(ReflectionProperty $prop, object $object): void
{
    $attributes = $prop->getAttributes(NotBlank::class);
    if (count($attributes) > 0) {
        if (!$prop->isInitialized($object)) {
            throw new Exception("Property $prop->name is null");
        }
        if ($prop->getValue($object) == null) {
            throw new Exception("Property $prop->name is null");
        }
    }
}

function validateLength(ReflectionProperty $prop, object $object): void
{
    if (!$prop->isInitialized($object) || $prop->getValue($object) == null) {
        return;
    }
    $value = $prop->getValue($object);
    $attributes = $prop->getAttributes(Length::class);
    foreach ($attributes as $attribute) {
        $length = $attribute->newInstance();
        $valueLength = strlen($value);
        if ($valueLength < $length->min) {
            throw new Exception("$prop->name is too short");
        }
        if ($valueLength > $length->max) {
            throw new Exception("$prop->name is too long");
        }
    }
}

$request = new LoginRequest();
$request->username = "mokotan";
$request->password = "mokotan123";
validate($request);

// $request = new LoginRequest();
// validate($request);
