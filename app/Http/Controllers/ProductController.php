<?php

namespace App\Http\Controllers;

use App\Models\product;
use Illuminate\Http\Request;

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
}
