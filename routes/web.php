<?php

use App\Http\Controllers\Pages\CategoryController;
use App\Http\Controllers\Pages\PeopleController;
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
//Category controller Group here
Route::controller(CategoryController::class)->group(function () {
    //category
    Route::get('/categories', 'Categories')->name('categories');
    Route::post('/categories/store', 'StoreCategory')->name('add.category');
    Route::get('/categories/delete/{id}', 'DeleteCetegory')->name('delete.category');
    //Brand
    Route::get('/brands', 'Brand')->name('brands');
    Route::post('/brands/store', 'StoreBrand')->name('add.brand');
    Route::get('/brands/delete/{id}', 'DeleteBrand')->name('delete.brand');
    //vendor
    Route::get('/vendors', 'Vendor')->name('vendors');
    Route::post('/vendor/store', 'StoreVendor')->name('add.vendor');
    Route::get('/vendor/delete/{id}', 'DeleteVendor')->name('delete.vendor');
});

Route::controller(PeopleController::class)->group(function () {
    //vendor
    Route::get('/vendors', 'Vendor')->name('vendors');
    Route::post('/vendor/store', 'StoreVendor')->name('add.vendor');
    Route::get('/vendor/delete/{id}', 'DeleteVendor')->name('delete.vendor');
    //store 
    Route::get('/stores', 'Store')->name('stores');
    Route::post('/stores/store', 'StoreStore')->name('add.store');
    Route::get('/store/delete/{id}', 'DeleteStore')->name('delete.store');
});