<?php
include_once 'db.php';

class UserModel
{
    private $__db;

    public function __construct()
    {
        $this->db = new DB();
    }

    public function connexion($login, $password)
    {
        $connexion = $this->db->connexion();
        $result = $connexion->query("SELECT * FROM user WHERE username = '$login' AND password = '$password'");
        $user = $result->fetch(PDO::FETCH_ASSOC);
        if ($user != false) {
            setcookie('user', $user['username'], time() + (60 * 60 * 72));
            setcookie('role', $user['role'], time() + (60 * 60 * 72));

        } else {
            $error = false;

            return $error;
        }

        return $user;
    }

}