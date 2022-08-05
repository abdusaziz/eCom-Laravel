<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    function login(Request $req){
        $user = user::where(['email'=> $req->email])->first();

        if(!$user || !Hash::check($req->password, $user->password)){
            return "User name or password is incorrect.";
        } else {
            $req->session()->put('user',$user);
            return redirect('/');
        }
    }
}
