<?php


namespace App\Services;


use App\Repositories\UserRepository;

class UserService
{
    private $repository;

    public function __construct(UserRepository $repository)
    {
        $this->repository = $repository;
    }

    public function getAll()
    {
        return $this->repository->getAll();
    }

    public function get($id)
    {
        return $this->repository->get($id);
    }

    public function create($user)
    {
        return $this->repository->create($user);
    }

    public function update($id, $user)
    {
        return $this->repository->update($id, $user);
    }

    public function delete($id)
    {
        $this->repository->delete($id);
    }
}
