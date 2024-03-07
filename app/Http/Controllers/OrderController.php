<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;
use App\Services\OrderService;
use App\Http\Controllers\Controller;

class OrderController extends Controller
{
    // public function index()
    // {
    //     $test = Order::all();
    //     return response()->json($test);
    // }

    protected $orderService;


    public function __construct(OrderService $orderService)
    {
        $this->ordereService = $orderService;
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $orders = $this->orderService->getAllOrders();
        // Повернення виду зі списком ролей
        return response()->json($orders);
    }


    

    public function show(Request $request)
    {
        $order = $this->orderService->getIdOrders($request->id);
        // Повернення виду зі списком ролей
        return response()->json($order);
    }


    public function store(Request $request)
    {
        // Логіка для створення ролі з використанням сервісу
        $data = $request->validate([
            'name' => 'required|unique:orders|max:255',
            // Додайте інші правила валідації, які потрібні
        ]);

        $orders =  $this->orderService->createOrder($data);

        // Повернення до списку ролей або іншої сторінки
        return response()->json($orders);
    }

    public function update(Request $request, Order $order)
    {
        // Логіка для оновлення ролі з використанням сервісу
        $data = $request->validate([
            'name' => 'required|unique:orders,name,' . $order->id . '|max:255',
            // Додайте інші правила валідації, які потрібні
        ]);

        $orders = $this->orderService->updateOrder($order, $data);

        // Повернення до списку ролей або іншої сторінки
        return response()->json($orders);
    }

    public function destroy(Order $order)
    {
        // Логіка для видалення ролі з використанням сервісу
        $orders =   $this->orderService->deleteOrder($order);

        // Повернення до списку ролей або іншої сторінки
        return response()->json($orders);
    }
}
