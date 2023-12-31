<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoryController;
use App\Models\Category;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/',[CategoryController::class,'allCategories']);
Route::get('/createCategory', function () {
    return view('categoryForm');
});
Route::get('/product/create', [ProductController::class, 'create'])->name('product.create');
Route::get('/products',[ProductController::class,'allProducts']);
Route::post("/addCategory",[CategoryController::class,'store'])->name('form.submit');
Route::post("/addProduct",[ProductController::class,'store'])->name('addProduct.submit');
Route::get('/category/{id}', [CategoryController::class, 'show'])->name('category.show');
Route::put('/categoryUpdate/{id}',[CategoryController::class,'updateCategory'])->name('category.update');
Route::get('/edit/{id}',[CategoryController::class,'edit']);
Route::get('/editProduct/{id}',[ProductController::class,'editProduct']);
Route::delete('/productDelete/{id}',[ProductController::class,'deleteProduct'])->name('product.delete');
Route::put('/productUpdate/{id}',[ProductController::class,'updateProduct'])->name('product.update');