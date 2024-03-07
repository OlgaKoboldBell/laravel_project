<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\ProductRepair;
use App\Services\ProductRepairService;
use App\Http\Controllers\Controller;
class ProductRepairController extends Controller
{
    public function index()
    {
        $test = ProductRepair::all();
        return response()->json($test);
    }

    // protected $productRepairService;


    // public function __construct(ProductRepair $productRepairService)
    // {
    //     $this->productRepairService = $productRepairService;
    // }


    // /**
    //  * Display a listing of the resource.
    //  *
    //  * @return \Illuminate\Http\Response
    //  */
    // public function index()
    // {
    //     $productRepairs = $this->productRepairService->getAllProductRepairs();
    //     // Повернення виду зі списком ролей
    //     return response()->json($productRepairs);
    // }


    // public function show(Request $request)
    // {
    //     $productRepair = $this->productRepairService->getIdProductRepairs($request->id);
    //     // Повернення виду зі списком ролей
    //     return response()->json($productRepair);
    // }


    // public function store(Request $request)
    // {
    //     // Логіка для створення ролі з використанням сервісу
    //     $data = $request->validate([
    //         'name' => 'required|unique:productRepairs|max:255',
    //         // Додайте інші правила валідації, які потрібні
    //     ]);

    //     $productRepairs =  $this->productRepairService->createProductRepair($data);

    //     // Повернення до списку ролей або іншої сторінки
    //     return response()->json($productRepairs);
    // }

    // public function update(Request $request, ProductRepair $productRepair)
    // {
    //     // Логіка для оновлення ролі з використанням сервісу
    //     $data = $request->validate([
    //         'name' => 'required|unique:productRepairs,name,' . $productRepair->id . '|max:255',
    //         // Додайте інші правила валідації, які потрібні
    //     ]);

    //     $productRepairs = $this->productRepairService->updateProductRepair($productRepair, $data);

    //     // Повернення до списку ролей або іншої сторінки
    //     return response()->json($productRepairs);
    // }

    // public function destroy(ProductRepair $productRepair)
    // {
    //     // Логіка для видалення ролі з використанням сервісу
    //     $productRepairs =   $this->productRepairService->deleteProductRepair($productRepair);

    //     // Повернення до списку ролей або іншої сторінки
    //     return response()->json($productRepairs);
    // }
}
