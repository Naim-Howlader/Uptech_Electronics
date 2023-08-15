<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;
use App\Models\BlogCategory;

class BlogController extends Controller
{
    public function add(){
        $categories = BlogCategory::get();
        $data = compact('categories');
        return view('admin.blogs.add-blog')->with($data);
    }
    public function insert(Request $request){
        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'category' => 'required',
            'image' => 'required',
        ]);

        $image = $request->file('image')->getClientOriginalName();
        $destination = 'uploads/images/';
        $request->image->move(public_path($destination),$image);

        $blog = new Blog();
        $blog->name = $request['name'];
        $blog->description = $request['description'];
        $blog->category_id = $request['category'];
        $blog->image = $destination.$image;
        $blog->save();
        session()->flash('success', 'Blog added successfully');
        return redirect()->route('admin.blogs');
    }
}
