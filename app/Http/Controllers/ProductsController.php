<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\ProductType;

class ProductsController extends Controller
{
    public function index()
    {
        $productTypes = ProductType::with('products')->get();
        return view('products.index', compact('productTypes'));
    }

    public function show(Product $product)
    {
        return view('products.show');
    }
}
