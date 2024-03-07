<?php

namespace App\Services; 
use App\Models\ProductBrend;

class ProductBrendService
{
    public function getAllProductBrends()
    {
        return ProductBrend::all();
    }


    public function getIdProductBrends($id)
    {
        return ProductBrend::find($id);
    }

    public function createProductBrend(array $data)
    {
        return ProductBrend::create($data);
    }

   
    public function updateProductBrend(ProductBrend $productBrend, array $data)
    {
        $productBrend->update($data);
        return $productBrend;
    }

    public function deleteProductBrend(ProductBrend $productBrend)
    {
        $productBrend->delete();
    }




}