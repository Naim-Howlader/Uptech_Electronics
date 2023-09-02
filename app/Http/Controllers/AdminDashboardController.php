<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\BlogCategory;
use App\Models\Product;
use App\Models\Blog;
use App\Models\Order;

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
        $blogs = Blog::latest()->with('categories')->get();
        $data = compact('blog_categories','blogs');
        return view('admin.blogs')->with($data);
    }
    public function orders(){
        $orders = Order::get();
        $data = compact('orders');
        return view('admin.order')->with($data);
    }
}
