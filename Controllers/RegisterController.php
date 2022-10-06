<?php

require_once "Models/register.php";

class RegisterController
{
    public function __construct()
    {
    }

    public function RegisterPage(): void
    {
        require_once("Views/index.php");
    }

    public function handleRegister(): void
    {
        $email = $_POST['email-register'];
        $password = $_POST['password-app'];
        $registerModel = new Register($email, $password);
        $registerModel->register($email, $password);
        header("location: ?page=home");
    }
}