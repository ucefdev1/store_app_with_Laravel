<?php

namespace App\Http\Controllers;

use App\Models\Attrubite;
use App\Models\Color;
use App\Models\Image;
use App\Models\Product;
use Faker\Core\File;
use Illuminate\Http\Request;

class productController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth']);
    }

    function index(){

        $products = Product::get();
        return view('products.products',['products'=>$products]);
    }

    function destroy(Product $Product){
        $Product->delete();

        return back();
    }


    function destroy_image(int $id){
         $image = Image::where('id' , '=' , $id )->first();
         unlink($image->image_path);
         $image->delete();
        return back();
    }


    function destroy_color(int $id){
        $attr = Attrubite::where('id' , '=' , $id )->first();
        $attr->delete();
        return back();
    }

    function edit(Product $Product){
        $product_images = $Product->images;
        $product_colors = $Product->colors;
        $colors = Color::get();
        return view('products.editProduct',['Product'=>$Product,'colors'=>$colors,'product_colors'=>$product_colors,'product_images'=>$product_images]);
    }


    function update(Request $request,int $id){
         $this->validate($request,[
            'title'=>'required',
            'old_price'=>'required',
            'new_price'=>'required',
            'details'=>'required',
            'whatsapp'=>'required',
            'instagram'=>'required',
            'email'=>'required',
            'notif'=>'required',

        ]);

        $upd_product = Product::where('id' , '=' , $id )->first();
       // dd($upd_product);

                  $upd_product->title=$request->title;
                  $upd_product->old_price=$request->old_price;
                  $upd_product->new_price=$request->new_price;
                  $upd_product->details=$request->details;
                  $upd_product->whatsapp=$request->whatsapp;
                  $upd_product->instagram=$request->instagram;
                  $upd_product->email=$request->email;
                  $upd_product->notif=$request->notif;
                  if ($request->facebook_pixel!==null && $request->sanp_pixel!==null)
                  {
                      $upd_product->sanp_pixel = $request->sanp_pixel;
                      $upd_product->facebook_pixel = $request->facebook_pixel;
                  }
                  $upd_product->save();

        if ($request->image!==null) {
            if(count($request->image)>0 && $request->image[0]!=='null'){
                foreach ($request->image as $img){
                    $image_start_name = md5(rand(1000,10000));
                    $ext = strtolower($img->getClientOriginalExtension());
                    $image_name = $image_start_name .'.'.$ext;
                    $upload_file_path = 'storage/';
                    $image_url = $upload_file_path.$image_name;
                    $img->move($upload_file_path,$image_name);

                    Image::create([
                        'product_id'=>$id,
                        'image_name'=>$image_name,
                        'image_path'=>$image_url
                    ]);
                }
            }

        }

        //add colors and attributes for product
        if($request->colors!==null){
            foreach ($request->colors as $color){
                Attrubite::create([
                    'product_id'=>$id,
                    'color'=>$color
                ]);
            }
        }

        return view('products.productUpdated');



    }

    function addProduct(){
        $colors = Color::get();
        return view('products.addProduct',['colors'=>$colors]);

    }

    function store(Request $request){



        //create the product
        $this->validate($request,[
            'title'=>'required',
            'old_price'=>'required',
            'new_price'=>'required',
            'details'=>'required',
            'whatsapp'=>'required',
            'instagram'=>'required',
            'email'=>'required',
            'notif'=>'required',
            'image'=>'required',
        ]);

        //create product images
        Product::create([
           'user_id'=>auth()->id(),
            'title'=>$request->title,
            'old_price'=>$request->old_price,
            'new_price'=>$request->new_price,
            'details'=>$request->details,
            'whatsapp'=>$request->whatsapp,
            'instagram'=>$request->instagram,
            'email'=>$request->email,
            'notif'=>$request->notif
        ]);

      // dd(auth()->user()->products->last()->id);

        if ($request->image!==null) {
            if(count($request->image)>0 && $request->image[0]!=='null'){
                foreach ($request->image as $img){
                    $image_start_name = md5(rand(1000,10000));
                    $ext = strtolower($img->getClientOriginalExtension());
                    $image_name = $image_start_name .'.'.$ext;
                    $upload_file_path = 'storage/';
                    $image_url = $upload_file_path.$image_name;
                    $img->move($upload_file_path,$image_name);

                    Image::create([
                        'product_id'=>auth()->user()->products->last()->id,
                        'image_name'=>$image_name,
                        'image_path'=>$image_url
                    ]);
                }
            }

        }

        //add colors and attributes for product
        if($request->colors!==null){
            foreach ($request->colors as $color){
                Attrubite::create([
                    'product_id'=>auth()->user()->products->last()->id,
                    'color'=>$color
                ]);
            }
        }

        return view('products.productAdded');

    }
}
