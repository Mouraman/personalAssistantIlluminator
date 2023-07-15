<?php

class Auth
{
    private static $instance = null;
    private $users = [];

    private function __construct()
    {
        $this->users = [
            'admin' => password_hash('password', PASSWORD_DEFAULT),
        ];
    }

    public static function getInstance()
    {
        if (self::$instance === null) {
            self::$instance = new Auth();
        }

        return self::$instance;
    }

    public function authenticate($username, $password)
    {
        if (!array_key_exists($username, $this->users)) {
            return false;
        }

        $hashed_password = $this->users[$username];

        if (!password_verify($password, $hashed_password)) {
            return false;
        }

        return true;
    }
}
