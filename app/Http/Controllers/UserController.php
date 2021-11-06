<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{

    public function __construct()
    {
        $this->middleware(['auth']);
    }

    function index(){
        $users = User::get();
        return view('users.users',['users'=>$users]);
    }


    function destroy(User $user){
        $user->delete();

        return back();
    }
}
