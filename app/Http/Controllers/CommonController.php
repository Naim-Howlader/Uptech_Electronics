<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Product;

class CommonController extends Controller
{
    public function index(){
        $categories = Category::with('products')->where('status', 'active')->latest()->take(3)->get();
        $data = compact('categories');
        return view('frontend.index')->with($data);
    }
    public function allProducts(){
        $categories = Category::with('products')->where('status', 'active')->latest()->get();
        $data = compact('categories');
        return view('frontend.all-products')->with($data);
    }
    public function image(){
        return env('APP_URL');
    }
}
