<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class ProductController extends Controller
{
    //* Product page
    public function index()
    {
        //Get all products
        $products = Product::All();

        return view('product', compact('products'));
    }
}
