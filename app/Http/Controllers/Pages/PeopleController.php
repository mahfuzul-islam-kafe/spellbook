<?php

namespace App\Http\Controllers\Pages;

use App\Http\Controllers\Controller;
use App\Models\Store;
use App\Models\Vendor;
use App\Models\Warehouse;
use Illuminate\Http\Request;
use Str;

class PeopleController extends Controller
{
    //vandor here 
    public function Vendor()
    {
        $vendors = Vendor::all();
        return view('pages.people.vendor',compact('vendors'));
    }
    public function EditVendor($id)
    {
        $vendor = Vendor::find($id);
        return view('pages.updates.vendors',compact('vendor'));
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
    public function UpdateVendor(Request $request,$id){
        $data = Vendor::find($id);
        $data->vendor_name = $request->vendor_name;
        $data->vendor_slug = str::slug($request->vendor_name);
        $data->product_name = $request->product_name;
        $data->vendor_contact = $request->vendor_contact;
        $data->vendor_type = $request->vendor_type;
        $data->note = $request->note;
        $data->save();
        return redirect('vendors');
    }
    public function DeleteVendor($id){
        $data = Vendor::find($id);
        $data->delete();
        return redirect()->back();
    }
    //Store here 
    public function Store(){
        $stores = Store::all();
        return view('pages.people.store',compact('stores'));
    }
    public function EditStore($id){
        $store = Store::find($id);
        return view('pages.updates.store',compact('store'));
    }
    public function StoreStore(Request $request){
        $data = new Store;
        $data->store_name = $request->store_name;
        $data->user_name = $request->user_name;
        $data->phone = $request->phone;
        $data->email = $request->email;
        $data->status = $request->status;
        $data->save();
        return redirect()->back();
    }
    public function UpdateStore(Request $request,$id){
        $data = Store::find($id);
        $data->store_name = $request->store_name;
        $data->user_name = $request->user_name;
        $data->phone = $request->phone;
        $data->email = $request->email;
        $data->status = $request->status;
        $data->save();
        return redirect('stores');
    }

    public function DeleteStore($id){
        $data = Store::find($id);
        $data->delete();
        return redirect()->back();
    }

    //warehouse
    public function Warehouse(){
        $warehouses = Warehouse::all();
        return view('pages.people.warehouse',compact('warehouses'));
    }
    public function StoreWarehouse(Request $request){
        $data = new Warehouse;
        $data->warehouse = $request->warehouse;
        $data->contact_person = $request->contact_person;
        $data->phone = $request->phone;
        $data->total_products = $request->total_products;
        $data->stock = $request->stock;
        $data->quantity = $request->quantity;
        $data->status = $request->status;
        $data->save();
        return redirect()->back();
    }
    public function EditWarehouse($id){
        $warehouse = Warehouse::find($id);
        return view('pages.updates.warehouse',compact('warehouse'));
    }
    public function UpdateWarehouse(Request $request,$id){
        $data = Warehouse::find($id);
        $data->warehouse = $request->warehouse;
        $data->contact_person = $request->contact_person;
        $data->phone = $request->phone;
        $data->total_products = $request->total_products;
        $data->stock = $request->stock;
        $data->quantity = $request->quantity;
        $data->status = $request->status;
        $data->save();
        return redirect('warehouse');
    }
    public function DeleteWarehouse($id){
        $data = Warehouse::find($id);
        $data->delete();
        return redirect()->back();
    }

}
