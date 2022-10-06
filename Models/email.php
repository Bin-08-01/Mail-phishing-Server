<?php

use JetBrains\PhpStorm\Pure;

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';

require_once "Models/register.php";

class Email
{
    private PHPMailer $email;
    private Register $registerModel;

    /**
     * @throws Exception
     */
    #[Pure] public function __construct()
    {
        $this->registerModel = new Register($_SESSION['email'], $_SESSION['password']);
        $this->initEmail();
    }

    /**
     * @throws Exception
     */
    private function initEmail(): void
    {
        $this->email = new PHPMailer(true);
        $this->email->SMTPDebug = SMTP::DEBUG_SERVER;
        $this->email->isSMTP();
        $this->email->Host = 'smtp.gmail.com';
        $this->email->SMTPAuth   = true;
        $name = 'Anonymous';
        $this->email->Username = $this->registerModel->getEmail();
        $this->email->Password = $this->registerModel->getPassword();
        $this->email->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
        $this->email->Port = 465;
        $this->email->setFrom($this->registerModel->getEmail(), $name);
    }

    public function sendEmail($emails, $title, $content, $file): void
    {
        try {
            $email_array = explode(",", $emails);
            $to_name = "You";
            $titleMain = $title;

            foreach ($email_array as $each) {
                $this->email->addAddress($each, $to_name);
            }
            $this->email->isHTML(true);
            $this->email->Subject = $titleMain;
            $contentHTML = ' <div class="card" style="width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title"><b>Xin chào ' . $to_name . '</b></h5>
                    <h6 class="card-subtitle mb-2 text-muted"></h6>
                    <p class="card-text">' . $content . '</p>
                </div>
                </div> ';
            $this->email->Body = $contentHTML;
            if ($file) {
                $upload_file = tempnam(sys_get_temp_dir(), sha1($_FILES['file']['name']));
                if (move_uploaded_file($_FILES['file']['tmp_name'], $upload_file)) {
                    $this->email->addAttachment($upload_file, $_FILES['file']['name']);
                }
            }
            $this->email->send();
        }catch (Exception $e) {
            echo 'Mail không gửi được. Lỗi: ' . $e;
        }
    }
}