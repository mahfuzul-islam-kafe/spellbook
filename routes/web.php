<?php

use App\Http\Controllers\Pages\CategoryController;
use App\Http\Controllers\Pages\ProductController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//admin controller group starts here
Route::controller(ProductController::class)->group(function () {
    Route::get('/products', 'Products')->name('products');
    Route::get('/products/add', 'AddProducts')->name('add.products');
    Route::post('/products/store', 'StoreProduct')->name('store.product');
});
//admin controller group starts here
Route::controller(CategoryController::class)->group(function () {
    //category
    Route::get('/categories', 'Categories')->name('categories');
    Route::post('/categories/store', 'StoreCategory')->name('add.category');
    Route::get('/categories/delete/{id}', 'DeleteCetegory')->name('delete.category');
    //sub-category
    Route::get('/sub-categories', 'SubCategory')->name('sub-categories');
    //sub-category
    Route::get('/sub-sub-categories', 'SubSubCategory')->name('sub-sub-categories');
    //sub-category
    Route::get('/brands', 'Brand')->name('brands');
    //sub-category
    Route::get('/vendors', 'Vendor')->name('vendors');

});