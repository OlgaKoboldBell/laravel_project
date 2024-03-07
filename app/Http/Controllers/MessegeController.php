<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Messege;
use App\Services\MessegeService;
use App\Http\Controllers\Controller;

class MessegeController extends Controller
{
    //  public function index()
    // {
    //     $test = Messege::all();
    //     return response()->json($test);
    // }

    protected $messegeService;

   
    public function __construct(MessegeService $messegeService)
    {
        $this->messegeService = $messegeService;
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $messeges = $this->messegeService->getAllMesseges();
        // Повернення виду зі списком ролей
        return response()->json($messeges);
    }


    public function show(Request $request)
    {
        $messege = $this->messegeService->getIdMesseges($request->id);
        // Повернення виду зі списком ролей
        return response()->json($messege);
    }


    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|unique:messeges|max:255',
            'tel' => 'phone' => 'required|regex:/^\d{10}$/', 
            'email' => 'required|email',
            'message' => 'required|max:1000', // Поле "текст" не повинно бути більше 1000 знаків
        ]);
    
        $messeges = $this->messegeService->createMessege($data);

        return response()->json($messeges);
    }


    public function update(Request $request, Role $role)
    {
        // Логіка для оновлення ролі з використанням сервісу
        $data = $request->validate([
            'name' => 'required|unique:messeges,name,' . $messege->id . '|max:255',
            // Додайте інші правила валідації, які потрібні
        ]);

        $messeges = $this->messegeService->updateMessege($messege, $data);

        // Повернення до списку ролей або іншої сторінки
        return response()->json($messeges);
    }

    public function destroy(Messege $messege)
    {
        // Логіка для видалення ролі з використанням сервісу
        $messeges =   $this->messegeService->deleteMessege($messege);

        // Повернення до списку ролей або іншої сторінки
        return response()->json($messeges);
    }
}
