<?php
class Register{
    private string $email;
    private string $password;

    public function __construct($email, $password){
        $this->email = $email;
        $this->password = $password;
    }

    public function __destruct()
    {

    }

    /**
     * @return string
     */
    public function getEmail(): string
    {
        return $this->email;
    }

    /**
     * @param  string  $email
     */
    public function setEmail(string $email): void
    {
        $this->email = $email;
    }

    /**
     * @return string
     */
    public function getPassword(): string
    {
        return $this->password;
    }

    /**
     * @param  string  $password
     */
    public function setPassword(string $password): void
    {
        $this->password = $password;
    }



    public function register(): void
    {
        $_SESSION['email'] = $this->email;
        $_SESSION['password'] = $this->password;
    }

    public function logout(){
        unset($_SESSION['email'], $_SESSION['password']);
        header("location: ?page=home");
    }
}