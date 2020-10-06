<?php


namespace App\Services;


use App\Models\Car;
use App\Repositories\CarRepository;

class CarService
{
    private $repository;

    public function __construct(CarRepository $repository)
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

    public function create($car)
    {
        return $this->repository->create($car);
    }

    public function update($id, $car)
    {
        return $this->repository->update($id, $car);
    }

    public function delete($id)
    {
        $this->repository->delete($id);
    }
}
