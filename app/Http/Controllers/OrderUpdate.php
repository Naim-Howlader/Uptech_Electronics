<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;

class OrderUpdate extends Controller
{
    public function editStatus($id){
        $orders = Order::find($id);
        //return $orders;die;
        $data = compact('orders');
        return view('admin.orders.update-order')->with($data);
    }
    public function updateStatus($id, Request $request){
        $orders = Order::find($id);
        $orders->status = $request['status'];
        $orders->update();
        session()->flash('success', 'Order status updated successfully');
        return redirect()->route('admin.orders');
    }
}
