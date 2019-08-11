<?php


namespace App\Services;


use App\Models\Category;

class CategoryService
{
    public function getCategory()
    {
        return Category::orderBy('sort', 'asc')->get();
    }
}