<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;


class ProductController extends Controller
{
    //
    public function allProducts ()
    {
        $product = Product::all();
        return view('products',["products"=>$product]);
    }
}
