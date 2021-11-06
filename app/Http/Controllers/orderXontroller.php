<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;

class orderXontroller extends Controller
{


    public function __construct()
    {
        $this->middleware(['auth']);
    }

    function orders(){
        $orders = Order::get();
        $orders = $orders->reverse();

        return view('orders.orders',['orders'=>$orders]);
    }

    function ship(Order $order){
        $order->status = 'shipped';
        $order->save();
        return back();
    }

    function deleteOrder(Order $order){
        $order->delete();
        return back();
    }
}
