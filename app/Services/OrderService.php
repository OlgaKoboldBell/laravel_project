<?php

namespace App\Services; 
use App\Models\Order;

class OrderService
{
    public function getAllOrders()
    {
        return Order::all();
    }


    public function getIdOrders($id)
    {
        return Order::find($id);
    }

    public function createOrder(array $data)
    {
        return Order::create($data);
    }

   
    public function updateOrder(Order $order, array $data)
    {
        $order->update($data);
        return $order;
    }

    public function deleteOrder(Order $order)
    {
        $order->delete();
    }




}