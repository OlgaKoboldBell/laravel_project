<?php

namespace App\Services;

use App\Models\User;
class UserService
{
    public function __construct()
    {
    }

    public function getAllUsers()
    {
        return User::all();
    }


    public function getIdUsers($id)
    {
        return User::find($id);
    }

    public function createUser(array $data)
    {
        return User::create($data);
    }

   
    public function updateUser(User $user, array $data)
    {
        $user->update($data);
        return $user;
    }

    public function deleteUser(User $user)
    {
        $user->delete();
    }

}