<!--Category adding  Modal -->
<div class="modal fade" id="categoryadding" tabindex="-1" aria-labelledby="categoryaddingLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="categoryaddingLabel">Add A New Category</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="{{ route('add.category') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <x-dashboard.form.text label='Category' name="category"></x-dashboard.form.text>
                        <div class="mb-3">
                            <label class="control-label">Categories</label>
                            <select class="form-control select2" name="parent_id">
                                <option value="">Select</option>
                                @foreach ($categories as $category)
                                    
                                <option value="{{$category->id}}">{{$category->category}}</option>
                                @endforeach
                                
                            </select>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary mt-2">Save Category</button>
                </form>
            </div>
        </div>
    </div>
</div>

<!--brand adding  Modal -->
<div class="modal fade" id="brandadding" tabindex="-1" aria-labelledby="brandaddingLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="brandaddingLabel">Add A New Brand</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="{{route('add.brand')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <x-dashboard.form.text label='Brand' name="brand_title"></x-dashboard.form.text>
                    </div>
                    <button type="submit" class="btn btn-primary mt-2">Save Brand</button>
                </form>
            </div>
        </div>
    </div>
</div>
<!--vendir adding  Modal -->
<div class="modal fade" id="vendoradding" tabindex="-1" aria-labelledby="vendoraddingLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="vendoraddingLabel">Add A New Vendor</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <x-dashboard.form.text label='Vendor Title' name="vendor_title"></x-dashboard.form.text>
                        <x-dashboard.form.text label='Vendor Product' name="vendor_product"></x-dashboard.form.text>
                        <x-dashboard.form.text label='Vendor Contact' name="vendor_contact"></x-dashboard.form.text>
                        <x-dashboard.form.text label='Vendor Type' name="vendor_type"></x-dashboard.form.text>
                        <div class="mb-3">
                            <label for="vendor_note">Note</label>
                            <textarea name="vendor_note" id="vendor_note" cols="30" rows="5" class="form-control" placeholder="Vandor Note"></textarea>
                        </div>

                    </div>
                    <button type="submit" class="btn btn-primary mt-2">Save Vendor</button>
                </form>
            </div>
        </div>
    </div>
</div>
