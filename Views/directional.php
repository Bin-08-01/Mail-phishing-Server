<?php
$route = $_GET["page"] ?? "home";
$email = $_SESSION['email'] ?? "";
$password = $_SESSION['password'] ?? "";

switch ($route) {
    case "home":
        if($email && $password){
            require_once "Home/home.php";
        }else{
            require_once "Home/register.php";
        }
        break;
}