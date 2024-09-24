<?php

namespace App\Http\Controllers;
use App\Models\Product;
use Illuminate\Http\Request;

class HomepageController extends Controller
{
    public function index()
    {
        $products = Product::with('category')->paginate(5);
        return view('welcome', compact('products'));
    }
}
