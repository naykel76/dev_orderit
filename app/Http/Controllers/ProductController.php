<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\View\View;

class ProductController extends Controller
{
    public function index(): View
    {
        return view('products.index')->with('products', Product::all());
    }

    public function show(Product $product): View
    {
        return view('products.show')->with('product', $product);
    }
}
