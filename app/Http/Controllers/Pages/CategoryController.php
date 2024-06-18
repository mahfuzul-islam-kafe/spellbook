<?php

namespace App\Http\Controllers\Pages;

use App\Http\Controllers\Controller;
use App\Models\Brand;
use App\Models\Category;
use App\Models\Vendor;
use Illuminate\Http\Request;
use Str;
class CategoryController extends Controller
{
    //main category here 
    public function Categories()
    {
        $categories = Category::root()->get();
        return view('pages.categories',compact('categories'));
    }
    public function StoreCategory(Request $request){
        $data = new Category;
        $data->category = $request->category;
        $data->parent_id = $request->parent_id;
        $data->category_slug = str::slug($request->category);
        $data->save();
        return redirect()->back();
    }
    public function DeleteCetegory($id){
        $category = Category::find($id);
        $category->delete();
        return redirect()->back();
    }

   
    //Brand here 
    public function Brand()
    {
        $brands = Brand::all();
        return view('pages.brand',compact('brands'));
    }
    public function StoreBrand(Request $request){
        $data = new Brand;
        $data->brand_title = $request->brand_title;
        $data->brand_slug = str::slug($request->brand_title);
        $data->save();
        return redirect()->back();
    }
    public function DeleteBrand($id){
        $brand = Brand::find($id);
        $brand->delete();
        return redirect()->back();
    }
    

}

