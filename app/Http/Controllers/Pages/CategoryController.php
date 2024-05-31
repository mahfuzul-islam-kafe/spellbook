<?php

namespace App\Http\Controllers\Pages;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
use Str;
class CategoryController extends Controller
{
    //main category here 
    public function Categories()
    {
        $categories = Category::all();
        return view('pages.categories',compact('categories'));
    }
    public function StoreCategory(Request $request){
        $data = new Category;
        $data->category = $request->category;
        $data->category_slug = str::slug($request->category);
        $data->save();
        return redirect()->back();
    }
    public function DeleteCetegory($id){
        $category = Category::find($id);
        $category->delete();
        return redirect()->back();
    }

    //sub category here 
    public function SubCategory()
    {
        return view('pages.sub-category');
    }
    //sub category here 
    public function SubSubCategory()
    {
        return view('pages.sub-sub-category');
    }
    //sub category here 
    public function Brand()
    {
        return view('pages.brand');
    }
    //sub category here 
    public function Vendor()
    {
        return view('pages.vendor');
    }
}

