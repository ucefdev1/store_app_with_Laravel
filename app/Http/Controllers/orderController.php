<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Product;
use Illuminate\Http\Request;

class orderController extends Controller
{



    function order(Request $request,Product $product){
        $this->validate($request,[
            'name'=>'required',
            'adresse'=>'required',
            'phone'=>'required',
            'city'=>'required',
        ]);

        if ($request->color===null){
            Order::create([
                'product_name'=>$product->title,
                'name'=>$request->name,
                'adresse'=>$request->adresse,
                'phone'=>$request->phone,
                'city'=>$request->city,
                'price'=>$product->new_price
            ]);
        }
        else{
            Order::create([
                'product_name'=>$product->title,
                'name'=>$request->name,
                'adresse'=>$request->adresse,
                'phone'=>$request->phone,
                'city'=>$request->city,
                'color'=>$request->color,
                'price'=>$product->new_price
            ]);
        }
        \Illuminate\Support\Facades\Mail::to($product->notif)->send(new \App\Mail\orderMail($product,$request));
        return view('orderCompleted',['product'=>$product]);

    }
}
