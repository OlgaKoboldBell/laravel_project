<?php

namespace App\Services; 
use App\Models\Role;

class RoleService
{
    public function getAllRoles()
    {
        return Role::all();
    }


    public function getIdRoles($id)
    {
        return Role::find($id);
    }

    public function createRole(array $data)
    {
        return Role::create($data);
    }

   
    public function updateRole(Role $role, array $data)
    {
        $role->update($data);
        return $role;
    }

    public function deleteRole(Role $role)
    {
        $role->delete();
    }




}