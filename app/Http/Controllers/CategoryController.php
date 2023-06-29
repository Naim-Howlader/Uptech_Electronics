<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;

class CategoryController extends Controller
{
    public function add(){
        return view('admin.product.add-category');
    }
    public function insert(Request $request){
        $request->validate([
            'name' => 'required',
            'image' => 'required',
        ]);
        $image = $request->file('image')->getClientOriginalName();
        $destination = 'uploads/images/';
        $request->image->move(public_path($destination),$image);
        $categories = new Category;
        $categories->name = $request['name'];
        $categories->image = $destination.$image;
        if($request->status == 'on'){
            $categories->status = 'active';
        }
        session()->flash('success', 'Category added successfully');
        $categories->save();
        return redirect()->route('admin.products');
    }
    public function edit($id){
        $categories = Category::find($id);
        if(empty($categories)){
            return redirect()->route('admin.products');
        }
        $url = route('category.update',['id'=>$id]);
        $data = compact('categories','url');
        return view('admin.product.update-category')->with($data);
    }
    public function update($id, Request $request){
        $request->validate([
            'name' => 'required',
        ]);
        $categories = Category::find($id);
        $products = DB::table('products')->where('category_id', $id);
        $categories->name = $request['name'];
        if($request->hasFile('image')){
            $destination = 'uploads/images/'.$categories->image;
            if (File::exists($destination)) {
                File::delete($destination);
            }
            $image = $request->file('image')->getClientOriginalName();
            $destination = 'uploads/images/';
            $request->image->move(public_path($destination),$image);
            $categories->image = $destination.$image;
        }
        if($request->status == 'on'){
            $categories->status = 'active';
        }
        else{
            $categories->status = 'inactive';
            $products->update(['status'=>'inactive']);
        }
        session()->flash('success', 'Category updated successfully');
        $categories->update();
        return redirect()->route('admin.products');
    }
    public function delete($id){
        $categories = Category::find($id);
        if(empty($categories)){
            return redirect()->route('admin.products');
        }
        $categories->delete();
        session()->flash('success', 'Category deleted successfully');
        return redirect()->route('admin.products');
    }
}
