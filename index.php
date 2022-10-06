<?php
session_start();
$route = $_GET['page'] ?? "home";
$email = $_SESSION['email'] ?? "";
$pw = $_SESSION['password'] ?? "";

switch ($route){
    case "home":
        require_once "Controllers/RegisterController.php";
        $Register_object = new RegisterController();
        $Register_object->RegisterPage();
        break;
    case "register":
        require_once "Controllers/RegisterController.php";
        $Register_object = new RegisterController();
        $Register_object->handleRegister();
        break;
    case "send":
        require_once "Controllers/EmailController.php";
        $Email_obj = new EmailController();
        try {
            $Email_obj->sendEmail();
        } catch (Exception $e) {
            die($e);
        }
        break;
    case "logout":
        require_once "Controllers/RegisterController.php";
        $Register_object = new RegisterController();
        $Register_object->logout();
        break;
}