<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;

class ProductController extends Controller
{
    //
    public function allProducts ()
    {
        $product = Product::all();
        return view('products',["products"=>$product]);
    }
    

    public function create()
    {
        // Get all roles to populate the dropdown list
        $categories = Category::all();
        return view('productForm', ['categories' => $categories]);
    }

    public function store (Request $request)
    {
        $product = new Product();
        $validatedData = $request->validate([
            'name' => 'required | string | max:100',
            'price' => 'required | max:50'
          ]);
          $product->name = $validatedData['name'];
          $product->price = $validatedData['price'];
          $product->category_id=$request->input('category_id');
  
          $product->save();
  
          return redirect()->to('/')->with('success', 'Product created successfully!');
    }
    public function deleteProduct($id)
    {
        $product = Product::find($id);
        $product->delete();
        return redirect()->to('/products') ->with("success","Product deleted Successfully!");
    }
}
