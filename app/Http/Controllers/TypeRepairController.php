<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TypeRepair;
use App\Services\TypeRepairService;
use App\Http\Controllers\Controller;

class TypeRepairController extends Controller
{
    public function index()
    {
        $test = TypeRepair::all();
        return response()->json($test);
    }


    // protected $typeRepaireService;


    // public function __construct(TypeRepairService $typeRepairService)
    // {
    //     $this->typeRepaireService = $typeRepaireService;
    // }


    // /**
    //  * Display a listing of the resource.
    //  *
    //  * @return \Illuminate\Http\Response
    //  */
    // public function index()
    // {
    //     $typeRepaireServices = $this->typeRepaireService->getAllTypeRepairs();
    //     // Повернення виду зі списком ролей
    //     return response()->json($typeRepairs);
    // }


    // public function show(Request $request)
    // {
    //     $typeRepair = $this->typeRepairService->getIdTypeRepairs($request->id);
    //     // Повернення виду зі списком ролей
    //     return response()->json($typeRepair);
    // }


    // public function store(Request $request)
    // {
    //     // Логіка для створення ролі з використанням сервісу
    //     $data = $request->validate([
    //         'name' => 'required|unique:typeRepairs|max:255',
    //         // Додайте інші правила валідації, які потрібні
    //     ]);

    //     $typeRepairs =  $this->typeRepairService->createTypeRepair($data);

    //     // Повернення до списку ролей або іншої сторінки
    //     return response()->json($typeRepairs);
    // }

    // public function update(Request $request, TypeRepair $typeRepair)
    // {
    //     // Логіка для оновлення ролі з використанням сервісу
    //     $data = $request->validate([
    //         'name' => 'required|unique:typeRepairs,name,' . $typeRepair->id . '|max:255',
    //         // Додайте інші правила валідації, які потрібні
    //     ]);

    //     $typeRepairs = $this->typeRepairService->updateTypeRepair($typeRepair, $data);

    //     // Повернення до списку ролей або іншої сторінки
    //     return response()->json($typeRepairs);
    // }

    // public function destroy(TypeRepair $typeRepair)
    // {
    //     // Логіка для видалення ролі з використанням сервісу
    //     $typeRepairs =   $this->typeRepairService->deleteTypeRepair($typeRepair);

    //     // Повернення до списку ролей або іншої сторінки
    //     return response()->json($typeRepairs);
    // }
}
