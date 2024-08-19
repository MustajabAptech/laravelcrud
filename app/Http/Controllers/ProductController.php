<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    
    public function getProducts(){

        $data  = Product::get()->toArray();
        //dd($data);
        return view('app',['products'=>$data]);
    }
}
