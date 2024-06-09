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
    //vandor here 
    public function Vendor()
    {
        $vendors = Vendor::all();
        return view('pages.vendor',compact('vendors'));
    }
    public function StoreVendor(Request $request){
        $data = new Vendor;
        $data->vendor_name = $request->vendor_name;
        $data->vendor_slug = str::slug($request->vendor_name);
        $data->product_name = $request->product_name;
        $data->vendor_contact = $request->vendor_contact;
        $data->vendor_type = $request->vendor_type;
        $data->note = $request->note;
        $data->save();
        return redirect()->back();
    }
    public function DeleteVendor($id){
        $data = Vendor::find($id);
        $data->delete();
        return redirect()->back();
    }

}

