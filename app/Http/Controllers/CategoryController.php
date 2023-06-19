<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use Illuminate\Support\Facades\DB;

class CategoryController extends Controller
{
    public function add(){
        return view('admin.product.add-category');
    }
    public function insert(Request $request){
        $request->validate([
            'name' => 'required',
        ]);
        $categories = new Category;
        $categories->name = $request['name'];
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
        session()->flash('success', 'Category deleted successfully');
        $categories->delete();
        return redirect()->route('admin.products');
    }
}
