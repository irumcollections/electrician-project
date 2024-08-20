<?php

class UserController {
    private $userModel;

    public function __construct() {
        $this->userModel = new User();
    }

    public function login() {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $email = Validation::sanitize($_POST['email']);
            $password = Validation::sanitize($_POST['password']);

            if ($this->userModel->login($email, $password)) {
                Auth::login($this->userModel->getUserId());
                header('Location: ' . BASE_URL . '/dashboard');
            } else {
                $error = "Invalid login credentials";
                include __DIR__ . '/../views/users/login.php';
            }
        } else {
            include __DIR__ . '/../views/users/login.php';
        }
    }

    public function register() {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $name = Validation::sanitize($_POST['name']);
            $email = Validation::sanitize($_POST['email']);
            $password = Validation::sanitize($_POST['password']);

            if ($this->userModel->register($name, $email, $password)) {
                header('Location: ' . BASE_URL . '/login');
            } else {
                $error = "Registration failed";
                include __DIR__ . '/../views/users/register.php';
            }
        } else {
            include __DIR__ . '/../views/users/register.php';
        }
    }

    public function dashboard() {
        if (Auth::check()) {
            $user = $this->userModel->getUserById(Session::get('user_id'));
            include __DIR__ . '/../views/dashboard/index.php';
        } else {
            header('Location: ' . BASE_URL . '/login');
        }
    }
}
