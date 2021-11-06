<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth']);
    }


    function addUser(){
        return view('users.addUser');
    }

    function storeUser(Request $request){
       $this->validate($request,[
           'username' => 'required|max:255|unique:users',
           'password'=>'required|confirmed'
       ]);

       User::create([
           'username'=>$request->username,
           'password'=>Hash::make($request->password),
       ]);

       return view('users.userAdded');
    }
}
