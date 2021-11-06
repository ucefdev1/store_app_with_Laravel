<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class sellerController extends Controller
{
    function index(int $id){
        if (!is_int($id)){
            return abort(404);
        }
        $product = Product::where('id' , '=' , $id )->first();
        if ($product==null){
            return abort(404);
        }
        $product_images = $product->images;
        $product_colors = $product->colors;
        return view('template.sellTemplate',['product'=>$product,'product_colors'=>$product_colors,'product_images'=>$product_images]);
    }
}
