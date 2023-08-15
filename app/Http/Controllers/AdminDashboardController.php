<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\BlogCategory;
use App\Models\Product;

class AdminDashboardController extends Controller
{
    public function products(){
        $categories = Category::latest()->get();
        $products = Product::latest()->with('category')->get();
        $data = compact('categories','products');
        return view('admin.products')->with($data);
    }
    public function blogs(){
        $blog_categories = BlogCategory::latest()->get();
        $data = compact('blog_categories');
        return view('admin.blogs')->with($data);
    }
}
