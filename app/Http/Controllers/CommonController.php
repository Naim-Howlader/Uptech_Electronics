<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Product;
use App\Models\Blog;
use App\Models\BlogCategory;

class CommonController extends Controller
{
    public function index(){
        $categories = Category::with('products')->where('status', 'active')->latest()->take(3)->get();
        $allCategories = Category::with('products')->where('status', 'active')->latest()->get();
        $blogs = Blog::with('categories')->where('status', 'active')->latest()->take(4)->get();
        $url = env('APP_URL');
        $data = compact('categories', 'url', 'allCategories','blogs');
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
    public function singleCategoryProduct($id){
        $categories = Category::with('products')->find($id);
        //$categories = Category::with('products')->where('id', $id)->first(); this works too
        $url = env('APP_URL');
        $data = compact('categories','url');
        return view('frontend.single-category-product')->with($data);
    }
}
