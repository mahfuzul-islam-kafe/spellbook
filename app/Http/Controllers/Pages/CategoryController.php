<?php

namespace App\Http\Controllers\Pages;

use App\Http\Controllers\Controller;
use App\Models\Brand;
use App\Models\Category;
use App\Models\SubCategory;
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
        $subs = SubCategory::all();
        return view('pages.sub-category',compact('subs'));
    }
    public function StoreSubCategory(Request $request){
        $data = new SubCategory;
        $data->sub_category = $request->sub_category;
        $data->sub_category_slug = str::slug($request->sub_category);
        $data->save();
        return redirect()->back();
    }
    public function DeleteSubCetegory($id){
        $sub = SubCategory::find($id);
        $sub->delete();
        return redirect()->back();
    }
    //sub sub category here 
    public function SubSubCategory()
    {
        return view('pages.sub-sub-category');
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
    //vandor here 
    public function Vendor()
    {
        return view('pages.vendor');
    }
}

