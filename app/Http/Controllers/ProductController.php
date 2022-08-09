<?php

namespace App\Http\Controllers;

use App\Models\cart;
use App\Models\product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;


class ProductController extends Controller
{
    function index(){
        $products = product::all(); 
        return view('product')->with('products',$products);
    }

    function detail($id){
        $data = product::find($id);
        return  View('detail')->with('data',$data);
    }

    function search(Request $req){
        
       $data = product::where('name','like','%'.$req->input('query').'%')->get();

       return view('search')->with('data', $data);
    }

    function add_to_cart(Request $req){        

        if($req->session()->has('user')){
            $cart = new cart;
            $cart->user_id = $req->session()->get('user')['id'];
            $cart->product_id = $req->input('product_id');
            $cart->save();
            return view('add_to_cart');

        }else{
            return redirect('/login');
        }
    }

    static function cartItem(){
       $userId = Session::get('user')['id'];
        return cart::where('user_id',$userId)->count();
    }
}
