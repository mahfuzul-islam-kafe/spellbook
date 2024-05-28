<?php

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
});