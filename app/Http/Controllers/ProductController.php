<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    
    public function getProducts(){
        $data  = Product::get()->toArray();
        return view('app',['products'=>$data]);
    }
    public function addProduct(Request $request){
        $Product = new Product();
        $Product->product_name = $request->product_name;
        $Product->product_desc = $request->product_desc;
        $Product->save();
        return redirect('/');
    }
    public function updateProduct(Request $request){
        $Product = Product::find($request->id);
        $Product->product_name = $request->product_name;
        $Product->product_desc = $request->product_desc;
        $Product->save();
        return redirect('/');
    }
    /* **************************************************************************** */
    public function deleteProduct($id){
        Product::find($id)->delete();
        return redirect('/');
    }
    public function editProduct($id){
        $editData = Product::find($id)->toArray();
        $data  = Product::get()->toArray();
        return view('app',['products'=>$data,'editRecord'=>$editData]);
    }
    
}
