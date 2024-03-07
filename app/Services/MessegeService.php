<?php

namespace App\Services; 
use App\Models\Messege;

class MessegeService
{
    public function getAllMesseges()
    {
        return Messege::all();
    }


    public function getIdMesseges($id)
    {
        return Messege::find($id);
    }

    public function createMessege(array $data)
    {
        return Messege::create($data);
    }

   
    public function updateMessege(Messege $messege, array $data)
    {
        $messege->update($data);
        return $messege;
    }

    public function deleteMessege(Messege $messege)
    {
        $messege->delete();
    }




}