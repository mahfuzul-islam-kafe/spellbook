<?php

namespace App\Http\Controllers\Pages;

use App\Http\Controllers\Controller;
use App\Models\Brand;
use App\Models\Category;
use App\Models\Product;
use App\Models\Store;
use App\Models\Vendor;
use App\Models\Warehouse;
use Illuminate\Http\Request;
use Str;

class ProductController extends Controller
{
    //test

    public function Test()
    {
        return view('pages.test');
    }
    public function Products()
    {
        return view('pages.products');
    }
    public function AddProducts()
    {
        $categories = Category::root()->get();
        $brands = Brand::all();
        $vendors = Vendor::all();
        $stores = Store::all();
        $warehouses = Warehouse::all();

        return view('pages.add-products', compact('categories', 'brands', 'vendors', 'stores', 'warehouses', ));
    }
    public function Storeproduct(Request $request)
    {
       
        $data = new Product;
        
        $images = [];
       
        if ($request->hasFile('images')) {
            foreach ($request->images as $image) {
                $images[] = $image->store('images', 'public');
                $data->image = json_encode($images) ;
            }
        }
        // dd(json_decode(json_encode($images)));

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
        // if ($request->hasFile('images')) {
        //     $filePath = $request->file('image')->store('images', 'public');
        //     $data->image = $filePath;
        // }

        $data->vendor = $request->vendor;
        $data->manufactureddate = $request->manufactureddate;
        $data->expiryon = $request->expiryon;
        $data->save();
        return redirect()->back();
    }
}
