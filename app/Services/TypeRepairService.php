<?php

namespace App\Services; 
use App\Models\TypeRepair;

class TypeRepairService
{
    public function getAllTypeRepairs()
    {
        return TypeRepair::all();
    }


    public function getIdTypeRepairs($id)
    {
        return TypeRepair::find($id);
    }

    public function createTypeRepair(array $data)
    {
        return TypeRepair::create($data);
    }

   
    public function updateTypeRepair(TypeRepair $typeRepair, array $data)
    {
        $typeRepair->update($data);
        return $typeRepair;
    }

    public function deleteTypeRepair(TypeRepair $typeRepair)
    {
        $typeRepair->delete();
    }




}