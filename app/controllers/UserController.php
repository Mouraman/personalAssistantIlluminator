<?php

class UserController {

    private $userModel;

    public function __construct(UserModel $userModel) {
        $this->userModel = $userModel;
    }

    public function index() {
        // Get the user input.
        $username = $_POST['username'];
        $password = $_POST['password'];

        // Check if the user exists.
        $user = $this->userModel->getUser($username);

        // If the user exists, check if the password is correct.
        if ($user && password_verify($password, $user['password'])) {
            // Log the user in.
            $_SESSION['username'] = $username;
            $_SESSION['logged_in'] = true;

            // Redirect the user to the home page.
            header('Location: /');
        } else {
            // Redirect the user to the login page.
            header('Location: /login');
        }
    }

    public function register() {
        // Get the user input.
        $username = $_POST['username'];
        $name = $_POST['name'];
        $email = $_POST['email'];
        $password = $_POST['password'];

        // Check if the username is already taken.
        $user = $this->userModel->getUser($username);

        // If the username is not taken, create a new user.
        if (!$user) {
            $this->userModel->createUser($username, $name, $email, $password);

            // Redirect the user to the login page.
            header('Location: /login');
        } else {
            // Redirect the user to the register page.
            header('Location: /register');
        }
    }

    public function logout() {
        // Destroy the user session.
        session_destroy();

        // Redirect the user to the home page.
        header('Location: /');
    }

}
