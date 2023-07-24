<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    //
    public function store(Request $request)
    {
        // validate the incoming data
        $validatedData = $request->validate([
          'name' => 'required | string | max:100',
        ]);
        $category = new Category();
        $category->name = $validatedData['name'];

        $category->save();

        return redirect()->to('/')->with('success', 'Product created successfully!');
    }

}