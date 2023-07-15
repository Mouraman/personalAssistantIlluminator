<?php
namespace App\Core\Model;
use Database;

class UserModel {

    private $database;

    public function __construct(Database $database) {
        $this->database = $database;
    }

    public function getUser($name) {
        $query = $this->database->prepare('SELECT * FROM users WHERE name = :name');
        $query->bindParam(':name', $name);
        $query->execute();

        $user = $query->fetch();

        return $user;
    }

    public function createUser($name, $email, $password) {
        $query = $this->database->prepare('INSERT INTO users (name, email, password) VALUES (:name, :email, :password)');
        $query->bindParam(':name', $name);
        $query->bindParam(':email', $email);
        $query->bindParam(':password', $password);
        $query->execute();
    }

    public function deleteUser($name) {
        $query = $this->database->prepare('DELETE FROM users WHERE name = :name');
        $query->bindParam(':name', $name);
        $query->execute();
    }

    public function updateUser($name, $email, $password) {
        $query = $this->database->prepare('UPDATE users SET name = :name, email = :email, password = :password WHERE name = :name');
        $query->bindParam(':name', $name);
        $query->bindParam(':email', $email);
        $query->bindParam(':password', $password);
        $query->bindParam(':name', $name);
        $query->execute();
    }

    public function listUsers() {
        $query = $this->database->prepare('SELECT * FROM users');
        $query->execute();

        $users = $query->fetchAll();

        return $users;
    }

    public function searchUsers($name) {
        $query = $this->database->prepare('SELECT * FROM users WHERE name LIKE :name');
        $query->bindParam(':name', $name);
        $query->execute();

        $users = $query->fetchAll();

        return $users;
    }

    public function authenticateUser($name, $password) {
        $query = $this->database->prepare('SELECT * FROM users WHERE name = :name AND password = :password');
        $query->bindParam(':name', $name);
        $query->bindParam(':password', $password);
        $query->execute();

        $user = $query->fetch();

        if ($user) {
            return $user;
        } else {
            return null;
        }
    }

}
