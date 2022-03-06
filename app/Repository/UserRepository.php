<?php

namespace App\Repository;

use App\Models\User;

class UserRepository extends AbstractRepository
{
    public function __construct()
    {
        parent::__construct(User::class);
    }

    public function store(array $data)
    {
        return $this->getModel()->create($data);
    }

    public function getAll()
    {
        return $this->getModel()->paginate(10);
    }

    public function findById($id)
    {
        return $this->getModel()->find($id);
    }

    public function updateUser(array $data)
    {
        return $this->getModel()->findOrFail($data['id'])->update($data);
    }

    public function searchByName($data)
    {
        return $this->getModel()->where('name', 'like', '%' . $data . '%')->get();
    }

    public function deleteUser($data)
    {
        return $this->getModel()->where('id', $data)->delete();
    }
}
