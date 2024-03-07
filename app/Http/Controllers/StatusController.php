<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Status;
use App\Services\StatusService;
use App\Http\Controllers\Controller;
class StatusController extends Controller
{
    protected $statusService;


    public function __construct(StatusService $statusService)
    {
        $this->statusService = $statusService;
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $statuses = $this->statusService->getAllStatuses();
        // Повернення виду зі списком ролей
        return response()->json($statuses);
    }


    public function show(Request $request)
    {
        $Status = $this->StatusService->getIdStatuses($request->id);
        // Повернення виду зі списком ролей
        return response()->json($status);
    }


    public function store(Request $request)
    {
        // Логіка для створення ролі з використанням сервісу
        $data = $request->validate([
            'name' => 'required|unique:statuses|max:255',
            // Додайте інші правила валідації, які потрібні
        ]);

        $statuses =  $this->statusService->createStatus($data);

        // Повернення до списку ролей або іншої сторінки
        return response()->json($statuses);
    }

    public function update(Request $request, Status $status)
    {
        // Логіка для оновлення ролі з використанням сервісу
        $data = $request->validate([
            'name' => 'required|unique:statuses,name,' . $status->id . '|max:255',
            // Додайте інші правила валідації, які потрібні
        ]);

        $statuses = $this->statusService->updateStatus($status, $data);

        // Повернення до списку ролей або іншої сторінки
        return response()->json($statuses);
    }

    public function destroy(Status $status)
    {
        // Логіка для видалення ролі з використанням сервісу
        $statuses =   $this->statusService->deleteStatus($role);

        // Повернення до списку ролей або іншої сторінки
        return response()->json($statuses);
    }
}
