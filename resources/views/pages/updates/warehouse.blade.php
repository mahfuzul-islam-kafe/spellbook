<x-dashboard.admin title='Update Warehouse'>
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title mb-4">Update Warehouse</h4>
                    <form action="{{ route('update.warehouse',$warehouse->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <x-dashboard.form.text label='Warehouse' name="warehouse" value="{{$warehouse->warehouse}}"></x-dashboard.form.text>
                            <x-dashboard.form.text label='Contact Person' name="contact_person" value="{{$warehouse->contact_person}}"></x-dashboard.form.text>
                            <x-dashboard.form.text label='Phone' name="phone" value="{{$warehouse->phone}}"></x-dashboard.form.text>
                            <x-dashboard.form.text label='Total Products' name="total_products" value="{{$warehouse->total_products}}"></x-dashboard.form.text>
                            <x-dashboard.form.text label='Stock' name="stock" value="{{$warehouse->stock}}"></x-dashboard.form.text>
                            <x-dashboard.form.text label='Quantity' name="quantity" value="{{$warehouse->quantity}}"></x-dashboard.form.text>
                            <label for="status">Status</label>
                            <select class="form-control select2" name="status" >
                                <option value="">Select</option>
                                <option value="active" {{ $warehouse->status == 'active' ? 'selected' : '' }} class="text-success">Active</option>
                                <option value="inactive" {{ $warehouse->status == 'inactive' ? 'selected' : '' }} class="text-danger">Inactive</option>
                            </select>
                        </div>
                        <button type="submit" class="btn btn-primary mt-3">Save Warehouse</button>
                    </form>
                </div>
            </div>
        </div> <!-- end col -->
    </div> <!-- end row -->



</x-dashboard.admin>
