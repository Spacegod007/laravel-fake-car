<?php


namespace App\Repositories;


abstract class Repository
{
    public abstract function getAll();
    public abstract function get($id);
    public abstract function create($object);
    public abstract function update($id, $object);
    public abstract function delete($id);
}
