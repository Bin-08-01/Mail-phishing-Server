<?php
$route = $_GET["page"] ?? "home";
$email = $_SESSION['email'] ?? "";
$password = $_SESSION['password'] ?? "";

switch ($route) {
    case "home":
        $act = $_GET["act"] ?? "";
        if($email && $password){
            if($act=="option1"){
                require_once "Home/option1.php";
            }elseif ($act=="option2"){
                require_once "Home/option2.php";
            }else{
                require_once "Home/middle.php";
            }
        }else{
            require_once "Home/register.php";
        }
        break;
    case "guide":
        require_once "Guide/guide.php";
        break;
}