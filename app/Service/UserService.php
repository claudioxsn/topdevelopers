<?php

namespace App\Service;

use App\Repository\UserRepository;

class UserService
{
    public $userRepository;

    public function __construct(UserRepository $userRepository)
    {
        $this->userRepository = $userRepository;
    }

    public function store(array $data)
    {
        $response = $this->userRepository->store($data);

        if (!isset($response)) {
            return;
        }
        return $response;
    }

    public function getAll()
    {
        $users = $this->userRepository->getAll();
        if (!isset($users)) {
            return;
        }
        return $users;
    }

    public function findById($id)
    {
        $user = $this->userRepository->findById($id);
        if (!isset($user)) {
            return;
        }
        return $user;
    }

    public function update(array $data)
    {
        $response = $this->userRepository->updateUser($data);

        if (!isset($response)) {
            return;
        }
        return $response;
    }

    public function delete($data)
    {
        return $this->userRepository->deleteUser($data);
    }
}
