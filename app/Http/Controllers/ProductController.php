<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

use Illuminate\Support\Facades\Redirect;

class ProductController extends Controller
{
    public function index(){
        return view("product.index");
    }
    public function create(){
        return view("product.create");
    }

    public function store(Request $request){
        $data =$request->validate([
           'product_name' => 'required',
           'product_quantity' => 'required|numeric',
           'product_unit_price' => 'required|numeric',
           'product_description' => 'nullable'
        ]);

        $NewProduct = Product::create($data);

        return Redirect(Route('product.index'));
    }
    //
}
