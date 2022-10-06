<?php
$route = $_GET["page"] ?? "home";
$email = $_SESSION['email'] ?? "";
$password = $_SESSION['password'] ?? "";

switch ($route) {
    case "home":
        $act = $_GET["act"] ?? "";
        if($email && $password){
            if($act=="option1"){

            }elseif ($act=="option2"){
                require_once "Home/home.php";
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