<?php


namespace App\Repositories;


use App\Models\User;

class UserRepository extends Repository
{

    public function getAll()
    {
        return User::all();
    }

    public function get($id)
    {
        return User::find($id);
    }

    public function create($object)
    {
        return User::create($object);
    }

    public function update($id, $object)
    {
        $user = User::find($id);
        $user->update($object);
        return $user;
    }

    public function delete($id)
    {
        User::find($id)->delete();
    }
}
