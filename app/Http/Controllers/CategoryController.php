<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{

    public function allCategories ()
    {
        $category = Category::all();
        return view('welcome',["categories"=>$category]);
    }
    public function show($id)
    {
        // Fetch the parent model with its children
        $category = Category::find($id);
        $products = $category->products;
        return view('singleCategory', compact('category','products'));
    }
    public function store(Request $request)
    {
        // validate the incoming data
        $validatedData = $request->validate([
          'name' => 'required | string | max:100',
        ]);
        $category = new Category();
        $category->name = $validatedData['name'];

        $category->save();

        return redirect()->to('/')->with('success', 'Category created successfully!');
    }
    public function edit($id)
    {
        $category = Category::find($id);
        return view('updateCategoryForm',compact('category','id'));
    }

    public function updateCategory(Request $request,$id)
    {
        $category = Category::find($id);
        $validatedData = $request->validate([
            'name' => 'required | string | max:100',
          ]);
        $category->name = $validatedData['name'];
        $category->update();
        return redirect()->to('/')->with('success', 'Category updated successfully!');
    }
}
