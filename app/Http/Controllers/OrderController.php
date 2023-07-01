<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\Product;
use App\Models\User;

class OrderController extends Controller
{
    public function placeOrder(Request $request){
        $cart = session('cart');
        $place = [];
        $order = new Order();
        foreach($cart as $item){
        $product = Product::find($item['id']);
        $place[] = [
            'product_id' => $product->id,
            'product_name' => $product->name,
            'product_price' => $product->price,
            'product_image' => $product->image,
            'product_quantity' => $item['quantity'],

        ];
        }
        $order->user_id = auth()->user()->id;
        $order->cart_details = json_encode($place);
        $order->name = $request['name'];
        $order->email = $request['email'];
        $order->mobile = $request['mobile'];
        $order->street = $request['street'];
        $order->city = $request['city'];
        $order->region = $request['region'];
        $order->zip = $request['zip'];
        $order->country = $request['country'];
        $order->date = date('Y-m-d');
        $order->save();
        $request->session()->forget('cart');

    }

}
