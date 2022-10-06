<?php

require_once "Models/email.php";

class EmailController{
    public function __construct(){
    }

    public function sendEmail(): void
    {
        $EmailModel = new Email();
        $email = $_POST['email'];
        $title = $_POST['title'];
        $content = $_POST['content'];
        $file = $_FILES['file']['name'];
        $EmailModel->sendEmail($email, $title, $content, $file);
    }
}