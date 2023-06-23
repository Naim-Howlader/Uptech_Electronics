<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Support\Facades\File;

class ProductController extends Controller
{
    public function add(){
        $categories = Category::get();
        $data = compact('categories');
        return view('admin.product.add-product')->with($data);
    }
    public function insert(Request $request){
        $request->validate([
            'name' => 'required',
            'mini_description' => 'required',
            'description' => 'required',
            'feature' => 'required',
            'price' => 'required',
            'image' => 'required',
            'category' => 'required',
        ]);
        $image = $request->file('image')->getClientOriginalName();
        $destination = 'uploads/images/';
        $request->image->move(public_path($destination), $image);

        $products = new Product;
        $products->name = $request['name'];
        $products->mini_description = nl2br($request['mini_description']);
        $products->description = nl2br($request['description']);
        $products->feature = nl2br($request['feature']);
        $products->price = $request['price'];
        $products->image = $destination.$image;
        $products->category_id = $request['category'];
        if($request->status == 'on'){
            $products->status = 'active';
        }
        $products->save();
        session()->flash('success', 'Product added successfully');
        return redirect()->route('admin.products');
    }
    public function edit($id, Request $request){
        $products = Product::find($id);
        if(empty($products)){
            return redirect()->route('admin.products');
        }
        $categories = Category::get();
        $url = route('product.update', ['id'=>$id]);
        $data = compact('products', 'url', 'categories');
        return view('admin.product.update-product')->with($data);
    }
    public function update($id, Request $request){
        $request->validate([
            'name' => 'required',
            'mini_description' => 'required',
            'description' => 'required',
            'feature' => 'required',
            'price' => 'required',
            'category' => 'required',

        ]);
        $products = Product::find($id);
        $products->name = $request['name'];
        $products->mini_description = nl2br($request['mini_description']);
        $products->description = nl2br($request['description']);
        $products->feature = nl2br($request['feature']);
        $products->price = $request['price'];
        $products->category_id = $request['category'];
        if($request->hasFile('image')){
            $destination = 'uploads/images/'.$products->image;
            if (File::exists($destination)) {
                File::delete($destination);
            }
            $image = $request->file('image')->getClientOriginalName();
            $destination = 'uploads/images/';
            $request->image->move(public_path($destination), $image);
            $products->image = $destination.$image;
        }

        if($request->status == 'on'){
            $products->status = 'active';
        }else{
            $products->status = 'inactive';
        }
        $products->update();
        session()->flash('success', 'Product updated successfully');
        return redirect()->route('admin.products');
    }
    public function delete($id){
        $products = Product::find($id);
        if(empty($products)){
            return redirect()->route('admin.products');
        }
        $products->delete();
        session()->flash('success', 'Product deleted successfully');
        return redirect()->route('admin.products');
    }
}
