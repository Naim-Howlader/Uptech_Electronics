<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class AdminDashboardController extends Controller
{
    public function products(){
        $categories = Category::get();
        $data = compact('categories');
        return view('admin.products')->with($data);
    }
}
