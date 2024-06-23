<?php

namespace App\Http\Controllers\Pages;

use App\Http\Controllers\Controller;
use App\Models\Brand;
use App\Models\Category;
use App\Models\Product;
use App\Models\Store;
use App\Models\Vendor;
use Illuminate\Http\Request;
use Str;

class ProductController extends Controller
{
    public function Products(){
        return view('pages.products');
    }
    public function AddProducts(){
        $categories = Category::root()->get();
        $brands = Brand::all();
        $vendors = Vendor::all();
        $stores = Store::all();
        return view('pages.add-products',compact('categories','brands','vendors','stores'));
    }
    public function Storeproduct(Request $request){
        $data = new Product;
        $data->store = $request->store;
        $data->warehouse = $request->warehouse;
        $data->product_name = $request->product_name;
        $data->slug = str::slug($request->product_name);
        $data->sku = $request->sku;
        $data->category = $request->category;
        $data->brand = $request->brand;
        $data->unit = $request->unit;
        $data->selling_type = $request->selling_type;
        $data->barcode_symbology = $request->barcode_symbology;
        $data->item_code = $request->item_code;
        $data->description = $request->description;
        $data->quantity = $request->quantity;
        $data->price = $request->price;
        $data->tax_type = $request->tax_type;
        $data->discount_type = $request->discount_type;
        $data->discountvalue = $request->discountvalue;
        $data->quantityalert = $request->quantityalert;
        $data->image = $request->image;
        $data->vendor = $request->vendor;
        $data->manufactureddate = $request->manufactureddate;
        $data->expiryon = $request->expiryon;
        $data->save();
        return redirect()->back();
    }
}
