<?php

namespace App\Http\Controllers;

use App\Services\RoleService;
use App\Http\Controllers\Controller;
use App\Models\Role;
use Illuminate\Http\Request; 

class RoleController extends Controller
{

    
    protected $roleService;


    public function __construct(RoleService $roleService)
    {
        $this->roleService = $roleService;
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $roles = $this->roleService->getAllRoles();
        // Повернення виду зі списком ролей
        return response()->json($roles);
    }


    public function show(Request $request)
    {
        $role = $this->roleService->getIdRoles($request->id);
        // Повернення виду зі списком ролей
        return response()->json($role);
    }


    public function store(Request $request)
    {
        // Логіка для створення ролі з використанням сервісу
        $data = $request->validate([
            'name' => 'required|unique:roles|max:255',
            // Додайте інші правила валідації, які потрібні
        ]);

        $roles =  $this->roleService->createRole($data);

        // Повернення до списку ролей або іншої сторінки
        return response()->json($roles);
    }

    public function update(Request $request, Role $role)
    {
        // Логіка для оновлення ролі з використанням сервісу
        $data = $request->validate([
            'name' => 'required|unique:roles,name,' . $role->id . '|max:255',
            // Додайте інші правила валідації, які потрібні
        ]);

        $roles = $this->roleService->updateRole($role, $data);

        // Повернення до списку ролей або іншої сторінки
        return response()->json($roles);
    }

    public function destroy(Role $role)
    {
        // Логіка для видалення ролі з використанням сервісу
        $roles =   $this->roleService->deleteRole($role);

        // Повернення до списку ролей або іншої сторінки
        return response()->json($roles);
    }

}