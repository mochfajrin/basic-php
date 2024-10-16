<?php

class ValidationException extends Exception
{
    public function __construct(string $statusCode, string $message)
    {
        $this->code = $statusCode;
        $this->message = $message;
    }
}

class LoginRequest
{
    public string $username;
    public string $password;
}

class RegisterUserRequest extends LoginRequest
{
    public string $email;
}

class ValidationUtil
{
    static function validate(LoginRequest $loginRequest)
    {
        if (isset($loginRequest->username)) {
            throw new ValidationException(400, "Username is null");
        } else if (isset($loginRequest->password)) {
            throw new ValidationException(400, "Username is null");
        }
    }
    static function validateReflection($request)
    {
        $reflection = new ReflectionClass($request);
        $properties = $reflection->getProperties(ReflectionProperty::IS_PUBLIC);
        foreach ($properties as $prop) {
            echo $prop . PHP_EOL;
            if (!$prop->isInitialized($request)) {
                throw new ValidationException(400, "$prop->name is not set");
            } else if (is_null($prop->getValue($request))) {
                throw new ValidationException(400, "$prop->name is null");
            }
        }
    }
}

$loginRequest = new LoginRequest();
$loginRequest->username = "reimoo123";
$loginRequest->password = "";

ValidationUtil::validateReflection($loginRequest);

$loginRequest = new RegisterUserRequest();
$loginRequest->username = "reimoo123";
$loginRequest->password = "";

ValidationUtil::validateReflection($loginRequest);
