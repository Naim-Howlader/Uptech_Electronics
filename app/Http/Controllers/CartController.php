<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\User;

class CartController extends Controller
{
    public function viewCart(){
        if(auth()->user()){
        if(!empty(session('cart'))){
            $cart = session('cart');
        $data = [];
        foreach ($cart as $item) {
            $product = Product::find($item['id']);
            $data []= [
                'id' => $product->id,
                'name' => $product->name,
                'price' => $product->price,
                'image' => $product->image,
                'quantity' => $item['quantity'],
            ];
        }
        $user = auth()->user();
        $data = compact('data','user');

        return view('frontend.add-to-cart')->with($data);
        }else{
            return redirect('/');
        }
        }
        else{
            return redirect('login');
        }

    }
    public function addToCart($id){
         if(auth()->user()){
            //return "login";
        $product = Product::findOrFail($id);
        $cart = session()->get('cart');
        if(!$cart){
            $cart[$id] = [
                // 'user_id' =>auth()->user()->name,
                // 'name' => $product->name,
                // 'image' => $product->image,
                // 'price' => $product->price,
                'id' => $product->id,
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
            'id' => $product->id,
            'quantity' => 1,
        ];
        session()->put('cart',$cart);
            return redirect()->back()->with('message', 'new add to cart');
        }
         else{
             return redirect('login');
         }
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
