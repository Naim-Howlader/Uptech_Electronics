<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Product;

class CommonController extends Controller
{
    public function index(){
        $categories = Category::with('products')->where('status', 'active')->latest()->take(3)->get();
        $url = env('APP_URL');
        $data = compact('categories', 'url');
        return view('frontend.index')->with($data);
    }
    public function allProducts(){
        $categories = Category::with('products')->where('status', 'active')->latest()->get();
        $url = env('APP_URL');
        $data = compact('categories','url');
        return view('frontend.all-products')->with($data);
    }
    public function image(){
        return env('APP_URL');
    }
}
