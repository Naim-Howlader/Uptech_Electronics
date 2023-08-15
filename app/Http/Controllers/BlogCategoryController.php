<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BlogCategory;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;

class BlogCategoryController extends Controller
{
    public function add(){
        return view('admin.blogs.add-category');
    }
    public function insert(Request $request){
        $request->validate([
            'name' => 'required',
            'image' => 'required',
        ]);
        $image = $request->file('image')->getClientOriginalName();
        $destination = 'uploads/images/';
        $request->image->move(public_path($destination),$image);
        $blog_categories = new BlogCategory();
        $blog_categories->name = $request['name'];
        $blog_categories->image = $destination.$image;
        $blog_categories->save();
        session()->flash('success', 'Blog Category added successfully');
        return redirect()->route('admin.blogs');
    }

    public function edit($id){
        $blog_categories = BlogCategory::find($id);
        if(empty($blog_categories)){
            return redirecdt()->route('admin.blogs');
        }
        $url = route('blog_category.update',['id'=>$id]);
        $data = compact('blog_categories', 'url');
        return view('admin.blogs.update-category')->with($data);
    }

    public function update(Request $request, $id){
        $request->validate([
            'name' => 'required',
        ]);
        $blog_categories = Blogcategory::find($id);
        $blog_categories->name = $request['name'];
        if($request->hasFile('image')){
            $destination = 'uploads/images/'.$blog_categories->image;
            if(File::exists($destination)){
                File::delete($destination);
            }
        $image = $request->file('image')->getClientOriginalName();
        $destination = 'uploads/images/';
        $request->image->move(public_path($destination), $image);
        $blog_categories->image = $destination.$image;
        }

        $blog_categories->save();
        session()->flash('success', 'Blog Category updated successfully');
        return redirect()->route('admin.blogs');
    }

    public function delete($id){
        $blog_categories = BlogCategory::find($id);
        if(empty($blog_categories)){
            return redirect()->route('admin.blogs');
        }
        $blog_categories->delete();
        session()->flash('success', 'Blog Category deleted successfully');
        return redirect()->route('admin.blogs');
    }
}
