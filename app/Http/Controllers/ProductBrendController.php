<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\ProductBrend;
use App\Services\ProductBrendService;
use App\Http\Controllers\Controller;

class ProductBrendController extends Controller
{
    public function index()
    {
        $test = ProductBrend::all();
        return response()->json($test);
    }

    // protected $productBrend;


    // public function __construct(ProductBrendService $productBrend)
    // {
    //     $this->productBrendService = $productBrendService;
    // }


    // /**
    //  * Display a listing of the resource.
    //  *
    //  * @return \Illuminate\Http\Response
    //  */
    // public function index()
    // {
    //     $productBrends = $this->productBrendService->getAllProductBrends();
    //     // Повернення виду зі списком ролей
    //     return response()->json($productBrends);
    // }


    // public function show(Request $request)
    // {
    //     $productBrend = $this->productBrendService->getIdProductBrends($request->id);
    //     // Повернення виду зі списком ролей
    //     return response()->json($productBrend);
    // }


    // public function store(Request $request)
    // {
    //     // Логіка для створення ролі з використанням сервісу
    //     $data = $request->validate([
    //         'name' => 'required|unique:productBrends|max:255',
    //         // Додайте інші правила валідації, які потрібні
    //     ]);

    //     $productBrends =  $this->productBrendService->createProductBrend($data);

    //     // Повернення до списку ролей або іншої сторінки
    //     return response()->json($productBrends);
    // }

    // public function update(Request $request, ProductBrend $productBrend)
    // {
    //     // Логіка для оновлення ролі з використанням сервісу
    //     $data = $request->validate([
    //         'name' => 'required|unique:productBrends,name,' . $productBrend->id . '|max:255',
    //         // Додайте інші правила валідації, які потрібні
    //     ]);

    //     $productBrends = $this->productBrendService->updateRole($productBrend, $data);

    //     // Повернення до списку ролей або іншої сторінки
    //     return response()->json($productBrends);
    // }

    // public function destroy(ProductBrend $productBrend)
    // {
    //     // Логіка для видалення ролі з використанням сервісу
    //     $productBrends =   $this->productBrendService->deleteProductBrend($productBrend);

    //     // Повернення до списку ролей або іншої сторінки
    //     return response()->json($productBrends);
    // }

}
