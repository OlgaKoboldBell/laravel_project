<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Services\CategoryService;
use App\Http\Controllers\Controller;


class CategoryController extends Controller
{
    public function index()
    {
        $test = Category::all();
        return response()->json($test);
    }

    // protected $categoryService;


    // public function __construct(CategoryService $categoryService)
    // {
    //     $this->categoryService = $categoryService;
    // }


    // /**
    //  * Display a listing of the resource.
    //  *
    //  * @return \Illuminate\Http\Response
    //  */
    // public function index()
    // {
    //     $categories = $this->categoryService->getAllCategories();
    //     // Повернення виду зі списком ролей
    //     return response()->json($categories);
    // }


    // public function show(Request $request)
    // {
    //     $category = $this->categoryService->getIdCategories($request->id);
    //     // Повернення виду зі списком ролей
    //     return response()->json($category);
    // }


    // public function store(Request $request)
    // {
    //     // Логіка для створення ролі з використанням сервісу
    //     $data = $request->validate([
    //         'name' => 'required|unique:categories|max:255',
    //         // Додайте інші правила валідації, які потрібні
    //     ]);

    //     $categories =  $this->categoryService->createCategory($data);

    //     // Повернення до списку ролей або іншої сторінки
    //     return response()->json($categories);
    // }

    // public function update(Request $request, Category $category)
    // {
    //     // Логіка для оновлення ролі з використанням сервісу
    //     $data = $request->validate([
    //         'name' => 'required|unique:categories,name,' . $category->id . '|max:255',
    //         // Додайте інші правила валідації, які потрібні
    //     ]);

    //     $categories = $this->categoryService->updateCategory($category, $data);

    //     // Повернення до списку ролей або іншої сторінки
    //     return response()->json($categories);
    // }

    // public function destroy(Category $category)
    // {
    //     // Логіка для видалення ролі з використанням сервісу
    //     $categories =   $this->categoryService->deleteCategory($category);

    //     // Повернення до списку ролей або іншої сторінки
    //     return response()->json($categories);
    // }
}
