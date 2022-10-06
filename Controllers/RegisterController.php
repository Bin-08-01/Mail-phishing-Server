<?php

require_once "Models/register.php";

class RegisterController
{
    private $registerModel;
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
        $this->registerModel = new Register($email, $password);
        $this->registerModel->register();
        header("location: ?page=home");
    }

    public function logout(){
        $this->registerModel = new Register($_SESSION['email'], $_SESSION['password']);
        $this->registerModel->logout();
    }
}