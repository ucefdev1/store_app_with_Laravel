<?php

namespace App\Http\Controllers;

use App\Models\Color;
use App\Models\colorrr;
use Illuminate\Http\Request;

class colorController extends Controller
{

    public function __construct()
    {
        $this->middleware(['auth']);
    }

    function addColorPage(){
        return view('colors.addColor');
    }

    function index(){
        $colors = color::get();

        return view('colors.colors',['colors'=>$colors]);
    }

    function storeColor(Request $request){
        $this->validate($request,[
            'color'=>'required'
        ]);

        Color::create([
            'color'=>$request->color,
        ]);

        return redirect()->route('colors');
    }


    function destroy(int $id){
        $color = Color::where('id' , '=' , $id )->first();
        $color->delete();
        return back();
    }
}
