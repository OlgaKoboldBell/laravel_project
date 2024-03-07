<?php

namespace App\Services; 
use App\Models\Category;

class CategoryService
{
    public function getAllCategories()
    {
        return Category::all();
    }


    public function getIdCategories($id)
    {
        return Category::find($id);
    }

    public function createCategory(array $data)
    {
        return Category::create($data);
    }

   
    public function updateCategory(Category $category, array $data)
    {
        $category->update($data);
        return $category;
    }

    public function deleteCategory(Category $category)
    {
        $category->delete();
    }




}