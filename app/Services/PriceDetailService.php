<?php

namespace App\Services; 
use App\Models\PriceDetail;

class PriceDetailService
{
    public function getAllPriceDetails()
    {
        return PriceDetail::all();
    }


    public function getIdPriceDetails($id)
    {
        return PriceDetail::find($id);
    }

    public function createPriceDetail(array $data)
    {
        return PriceDetail::create($data);
    }

   
    public function updatePriceDetail(PriceDetail $priceDetail, array $data)
    {
        $priceDetail->update($data);
        return $priceDetail;
    }

    public function deletePriceDetail(PriceDetail $priceDetail)
    {
        $priceDetail->delete();
    }




}