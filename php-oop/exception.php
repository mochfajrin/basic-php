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

function loginValidation(LoginRequest $loginRequest)
{
    try {

        if (!isset($loginRequest->username)) {
            throw new ValidationException(400, "Username is null");
        } else if (!isset($loginRequest->password)) {
            throw new ValidationException(400, "Password is null");
        } else if ($loginRequest->username == "") {
            throw new Exception("Username is blank");
        } else if ($loginRequest->password == "") {
            throw new Exception("Password is blank");
        }
        echo "{ username: $loginRequest->username, password: $loginRequest->password }";
    } catch (ValidationException $e) {
        echo "Validation Error: statusCode: {$e->getCode()}, message: {$e->getMessage()}" . PHP_EOL;
        var_dump($e->getTrace());
    } catch (Exception $e) {
        echo "Exception Error: statusCode: {$e->getCode()}, message: {$e->getMessage()}" . PHP_EOL;
    }
    // multiple execption with same return
    // catch (ValidationException | Exception $e) {
    //     echo "Exception Error: statusCode: {$e->getCode()}, message: {$e->getMessage()}";
    // }
    finally {
        echo "db.connClose()";
    }
}

$loginRequest = new LoginRequest();
$loginRequest->username = "reimoo";

loginValidation($loginRequest);
