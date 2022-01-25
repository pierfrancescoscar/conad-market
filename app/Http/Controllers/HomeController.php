<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class HomeController extends Controller
{
    //* Homepage
    public function index()
    {
        //Get all products
        $products = Product::All();

        return view('home', compact('products'));
    }
}
