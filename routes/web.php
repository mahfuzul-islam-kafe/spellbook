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
    Route::get('/categories/edit/{id}', 'EditCategory')->name('edit.category');
    Route::post('/categories/update/{id}', 'UpdateCategory')->name('update.category');
    Route::get('/categories/delete/{id}', 'DeleteCetegory')->name('delete.category');
    //Brand
    Route::get('/brands', 'Brand')->name('brands');
    Route::get('/brand/edit/{id}', 'EditBrand')->name('edit.brand');
    Route::post('/brands/update/{id}', 'UpdateBrand')->name('update.brand');
    Route::post('/brands/store', 'StoreBrand')->name('add.brand');
    Route::get('/brands/delete/{id}', 'DeleteBrand')->name('delete.brand');
   
});

Route::controller(PeopleController::class)->group(function () {
    //vendor
    Route::get('/vendors', 'Vendor')->name('vendors');
    Route::get('/vendor/edit/{id}', 'EditVendor')->name('edit.vendor');
    Route::post('/vendor/store', 'StoreVendor')->name('add.vendor');
    Route::post('/vendor/update/{id}', 'UpdateVendor')->name('update.vendor');
    Route::get('/vendor/delete/{id}', 'DeleteVendor')->name('delete.vendor');
    //store 
    Route::get('/stores', 'Store')->name('stores');
    Route::get('/store/edit/{id}', 'EditStore')->name('edit.store');
    Route::post('/stores/store', 'StoreStore')->name('add.store');
    Route::post('/stores/store/{id}', 'UpdateStore')->name('update.store');
    Route::get('/store/delete/{id}', 'DeleteStore')->name('delete.store');
    //warehouse
    Route::get('/warehouse','Warehouse')->name('warehouse');
    Route::post('/warehouse/store', 'StoreWarehouse')->name('add.warehouse');
    Route::get('/warehouse/edit/{id}','EditWarehouse')->name('edit.warehouse');
    Route::post('/warehouse/update/{id}', 'UpdateWarehouse')->name('update.warehouse');
    Route::get('/warehouse/delete/{id}', 'DeleteWarehouse')->name('delete.warehouse');
});