<?php
include_once 'model/user.model.php';
class UserController
{
    private $__connexion;

    public function __construct()
    {
        $this->connexion = new UserModel();
    }

    public function connexion($login, $password)
    {
        $connexion = $this->connexion->connexion($login, $password);

        return $connexion;
        if ($connexion == false) {
            $error = false;
            return $error;

        }

    }

    public function deconnexion()
    {
        unset($_COOKIE['user']);
        unset($_COOKIE['role']);
        setcookie('user', false);
        setcookie('role', false);
    }
}