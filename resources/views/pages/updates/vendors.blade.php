<x-dashboard.admin title='Update Vendor'>
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">


                    <h4 class="card-title mb-4">Update Vendor</h4>
                    <form action="{{ route('update.vendor',$vendor->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <x-dashboard.form.text label='Vendor Title' name="vendor_name" value="{{$vendor->vendor_name}}"></x-dashboard.form.text>
                            <x-dashboard.form.text label='Vendor Product' name="product_name" value="{{$vendor->product_name}}"></x-dashboard.form.text>
                            <x-dashboard.form.text label='Vendor Contact' name="vendor_contact" value="{{$vendor->vendor_contact}}"></x-dashboard.form.text>
                            <x-dashboard.form.text label='Vendor Type' name="vendor_type" value="{{$vendor->vendor_type}}"></x-dashboard.form.text>
                            <div class="mb-3">
                                <label for="vendor_note">Note</label>
                                <textarea name="note" id="vendor_note" cols="30" rows="5" class="form-control"  >{{$vendor->note}}</textarea>
                            </div>
    
                        </div>
                        <button type="submit" class="btn btn-primary mt-2">Save Brand</button>
                    </form>
                </div>
            </div>
        </div> <!-- end col -->
    </div> <!-- end row -->



</x-dashboard.admin>
