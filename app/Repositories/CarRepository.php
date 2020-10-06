<?php


namespace App\Repositories;


use App\Models\Car;

class CarRepository extends Repository
{
    public function getAll()
    {
        return Car::all();
    }

    public function get($id)
    {
        return Car::find($id);
    }

    public function create($object)
    {
        return Car::create($object);
    }

    public function update($id, $object)
    {
        $managedCar = Car::find($id);
        $managedCar->update($object);
        return $managedCar;
    }

    public function delete($id)
    {
        Car::find($id)->delete();
    }
}
