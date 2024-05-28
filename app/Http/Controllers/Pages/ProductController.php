<?php

namespace App\Http\Controllers\Pages;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function Products(){
        return view('pages.products');
    }
    public function AddProducts(){
        return view('pages.add-products');
    }
}
