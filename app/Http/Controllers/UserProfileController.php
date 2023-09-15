<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;

class UserProfileController extends Controller
{
    public function dashboard(){
        $user = auth()->user();
        $data = compact('user');
        return view('frontend.user-profile.dashboard')->with($data);
    }
    public function myOrders(){
        $orders = Order::where('user_id', auth()->user()->id)->get();
        $data = compact('orders');
        return view('frontend.user-profile.my-orders')->with($data);
    }
}
