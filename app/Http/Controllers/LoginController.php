<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{

    public function __construct()
    {
       $this->middleware(['guest']);
    }


    function home(){


        return view('login');


    }

    function  login(Request $request){
        $this->validate($request,[
            'username' => 'required|max:255',
            'password'=>'required'
        ]);

        if(!auth()->attempt($request->only('username','password'),$request->remember)){
            return back()->with('status','الباسوورد غير صحيح');
        }

       return  redirect()->route('dashboard');
    }




}
