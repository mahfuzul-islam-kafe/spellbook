<x-dashboard.admin title='Update Store'>
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title mb-4">Update Store</h4>
                    <form action="{{ route('update.store',$store->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <x-dashboard.form.text label='Srore Name' name="store_name"
                                value="{{ $store->store_name }}"></x-dashboard.form.text>
                            <x-dashboard.form.text label='User Name' name="user_name"
                                value="{{ $store->user_name }}"></x-dashboard.form.text>
                            <x-dashboard.form.text label='Phone' name="phone"
                                value="{{ $store->phone }}"></x-dashboard.form.text>
                            <x-dashboard.form.text label='Email' name="email"
                                value="{{ $store->email }}"></x-dashboard.form.text>
                            <label for="status">Status</label>
                            <select class="form-control select2" name="status" >
                                <option value="">Select</option>
                                <option value="active" {{ $store->status == 'active' ? 'selected' : '' }} class="text-success">Active</option>
                                <option value="inactive" {{ $store->status == 'inactive' ? 'selected' : '' }} class="text-danger">Inactive</option>
                            </select>
                        </div>
                        <button type="submit" class="btn btn-primary mt-2">Save Srore</button>
                    </form>
                </div>
            </div>
        </div> <!-- end col -->
    </div> <!-- end row -->



</x-dashboard.admin>
