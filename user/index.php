<?php

class user
{
    private $name;
    private $email;
    private $password;

    public function __construct($name, $email, $password)
    {
        $this->name = $name;
        $this->invalidEmail($email);
        $this->email = $email;
        $this->password = $password;
    }

    private function invalidEmail($email)
    {
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            throw new Exception("Invalid email address.");
        }
    }

}