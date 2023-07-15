<?php

namespace App\Core\Service;

use App\Core\Model\UserModel;

class UserService
{

    private $userModel;

    public function __construct(UserModel $userModel)
    {
        $this->userModel = $userModel;
    }

    public function getUserById($id)
    {
        return $this->userModel->getUserById($id);
    }

    public function getUsers()
    {
        return $this->userModel->getUsers();
    }

    public function createUser(array $data)
    {
        return $this->userModel->createUser($data);
    }

    public function updateUser(int $id, array $data)
    {
        return $this->userModel->updateUser($id, $data);
    }

    public function deleteUser(int $id)
    {
        return $this->userModel->deleteUser($id);
    }

}