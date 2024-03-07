<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PriceDetail;
use App\Services\PriceDetailService;
use App\Http\Controllers\Controller;

class PriceDetailController extends Controller
{
    public function index()
    {
        $test = PriceDetail::all();
        return response()->json($test);
    }

    // protected $priceDetailService;


    // public function __construct(PriceDetailService $priceDetailService)
    // {
    //     $this->priceDetailService = $priceDetailService;
    // }


    // /**
    //  * Display a listing of the resource.
    //  *
    //  * @return \Illuminate\Http\Response
    //  */
    // public function index()
    // {
    //     $priceDetails = $this->priceDetailService->getAllPPriceDetails();
    //     // Повернення виду зі списком ролей
    //     return response()->json($priceDetails);
    // }


    // public function show(Request $request)
    // {
    //     $priceDetail = $this->priceDetailService->getIdPriceDetails($request->id);
    //     // Повернення виду зі списком ролей
    //     return response()->json($priceDetail);
    // }


    // public function store(Request $request)
    // {
    //     // Логіка для створення ролі з використанням сервісу
    //     $data = $request->validate([
    //         'name' => 'required|unique:priceDetails|max:255',
    //         // Додайте інші правила валідації, які потрібні
    //     ]);

    //     $priceDetails =  $this->priceDetailService->createPriceDetail($data);

    //     // Повернення до списку ролей або іншої сторінки
    //     return response()->json($priceDetails);
    // }

    // public function update(Request $request, PriceDetail $priceDetail)
    // {
    //     // Логіка для оновлення ролі з використанням сервісу
    //     $data = $request->validate([
    //         'name' => 'required|unique:priceDetails,name,' . $priceDetail->id . '|max:255',
    //         // Додайте інші правила валідації, які потрібні
    //     ]);

    //     $priceDetails = $this->priceDetailService->updatePriceDetail($priceDetail, $data);

    //     // Повернення до списку ролей або іншої сторінки
    //     return response()->json($priceDetails);
    // }

    // public function destroy(PriceDetail $priceDetail)
    // {
    //     // Логіка для видалення ролі з використанням сервісу
    //     $priceDetails =   $this->priceDetailService->deletePriceDetail($priceDetail);

    //     // Повернення до списку ролей або іншої сторінки
    //     return response()->json($priceDetails);
    // }
}
