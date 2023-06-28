<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\User;

class CartController extends Controller
{
    public function viewCart(){
        return view('frontend.add-to-cart');
    }
    public function addToCart($id){
        //if(auth()->user()){
            //return "login";
        $product = Product::findOrFail($id);
        $cart = session()->get('cart');
        if(!$cart){
            $cart[$id] = [
                'name' => $product->name,
                'image' => $product->image,
                'price' => $product->price,
                'quantity' => 1,
            ];
            session()->put('cart',$cart);
            return redirect()->back()->with('message', 'add to cart');
        }
        if(isset($cart[$id])){
            $cart[$id]['quantity']++;
            session()->put('cart',$cart);
            return redirect()->back()->with('message', 'add to cart again');
        }
        $cart[$id] = [
            'name' => $product->name,
            'image' => $product->image,
            'price' => $product->price,
            'quantity' => 1,
        ];
        session()->put('cart',$cart);
            return redirect()->back()->with('message', 'new add to cart');
        //}
        //else{
            //return "not login";
        //}
    }
    public function updateCart(Request $request){
        if($request->id && $request->quantity){
            $cart = session()->get('cart');
            $cart[$request->id]['quantity'] = $request->quantity;
            session()->put('cart',$cart);
        }
    }
    public function removeCart(Request $request){
        if($request->id){
            $cart = session()->get('cart');
            if(isset($cart[$request->id])){
                unset($cart[$request->id]);
                session()->put('cart',$cart);
            }
        }
    }
}
