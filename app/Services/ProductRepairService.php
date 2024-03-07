<?php

namespace App\Services; 
use App\Models\ProductRepair;

class ProductRepairService
{
    public function getAllProductRepairs()
    {
        return ProductRepair::all();
    }


    public function getIdProductRepairs($id)
    {
        return ProductRepair::find($id);
    }

    public function createProductRepair(array $data)
    {
        return ProductRepair::create($data);
    }

   
    public function updateProductRepair(ProductRepair $productRepair, array $data)
    {
        $productRepair->update($data);
        return $productRepair;
    }

    public function deleteProductRepair(ProductRepair $productRepair)
    {
        $productRepair->delete();
    }




}