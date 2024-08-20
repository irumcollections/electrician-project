<?php

class User {
    private $db;

    public function __construct() {
        $this->db = new Database();
    }

    public function getUserId() {
        return Session::get('user_id');
    }

    public function login($email, $password) {
        $sql = "SELECT * FROM users WHERE email = :email AND password = :password";
        $stmt = $this->db->query($sql, [
            'email' => $email,
            'password' => md5($password),
        ]);

        if ($stmt->rowCount() > 0) {
            $user = $stmt->fetch(PDO::FETCH_ASSOC);
            Session::set('user_id', $user['id']);
            return true;
        }

        return false;
    }

    public function register($name, $email, $password) {
        $sql = "INSERT INTO users (name, email, password) VALUES (:name, :email, :password)";
        return $this->db->query($sql, [
            'name' => $name,
            'email' => $email,
            'password' => md5($password),
        ]);
    }

    public function getUserById($id) {
        $sql = "SELECT * FROM users WHERE id = :id";
        return $this->db->query($sql, ['id' => $id])->fetch(PDO::FETCH_ASSOC);
    }
}
