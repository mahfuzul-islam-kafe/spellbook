<?php

namespace App\Http\Controllers\Pages;

use App\Http\Controllers\Controller;
use App\Models\Store;
use App\Models\Vendor;
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
    //Store here 
    public function Store(){
        $stores = Store::all();
        return view('pages.people.store',compact('stores'));
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
    public function DeleteStore($id){
        $data = Store::find($id);
        $data->delete();
        return redirect()->back();
    }
}
