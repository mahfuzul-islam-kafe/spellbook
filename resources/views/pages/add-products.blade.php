<x-dashboard.admin title='Add Product'>
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">

                    <h4 class="card-title">Add Product</h4>
                    <p class="card-title-desc">Fill all information below</p>

                    <form>
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="mb-3">
                                    <label class="control-label">Store</label>
                                    <select class="form-control select2">
                                        <option>Select</option>
                                        <option value="FA">Fashion</option>
                                        <option value="EL">Electronic</option>
                                    </select>
                                </div>

                            </div>
                            <div class="col-sm-6">
                                <div class="mb-3">
                                    <label class="control-label">Warehouse</label>
                                    <select class="form-control select2">
                                        <option>Select</option>
                                        <option value="FA">Fashion</option>
                                        <option value="EL">Electronic</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <x-dashboard.form.text label="Product Name" name='product'>
                                </x-dashboard.form.text>
                            </div>
                            <div class="col-sm-4">
                                <x-dashboard.form.text label="Slug" name='slug'>
                                </x-dashboard.form.text>
                            </div>
                            <div class="col-sm-4">
                                <x-dashboard.form.text label="SUK" name='suk'>
                                </x-dashboard.form.text>
                            </div>
                            <div class="col-sm-4">
                                <div class="mb-3">
                                    <label class="control-label">Category <button class="btn text-info"><i
                                                class='bx bx-plus-circle'></i>Add Category</button></label>
                                    <select class="form-control select2">
                                        <option>Select</option>
                                        <option value="FA">Fashion</option>
                                        <option value="EL">Electronic</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="mb-3">
                                    <label class="control-label mb-4">Sub Category</label>
                                    <select class="form-control select2">
                                        <option>Select</option>
                                        <option value="FA">Fashion</option>
                                        <option value="EL">Electronic</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="mb-3">
                                    <label class="control-label mb-4">Sub Sub Category</label>
                                    <select class="form-control select2">
                                        <option>Select</option>
                                        <option value="FA">Fashion</option>
                                        <option value="EL">Electronic</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="mb-3">
                                    <label class="control-label">Brand <button class="btn text-info"><i
                                                class='bx bx-plus-circle'></i>Add Brand</button></label>
                                    <select class="form-control select2">
                                        <option>Select</option>
                                        <option value="FA">Fashion</option>
                                        <option value="EL">Electronic</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="mb-3">
                                    <label class="control-label">Unit <button class="btn text-info"><i
                                                class='bx bx-plus-circle'></i>Add Unit</button></label>
                                    <select class="form-control select2">
                                        <option>Select</option>
                                        <option value="FA">Fashion</option>
                                        <option value="EL">Electronic</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="mb-3">
                                    <label class="control-label mb-4">Selling Type</label>
                                    <select class="form-control select2">
                                        <option>Select</option>
                                        <option value="FA">Fashion</option>
                                        <option value="EL">Electronic</option>
                                    </select>
                                </div>
                            </div>

                            <div class="col-sm-6">
                                <div class="mb-3">
                                    <label class="control-label">Barcode Symbology</label>
                                    <select class="form-control select2">
                                        <option>Select</option>
                                        <option value="FA">Fashion</option>
                                        <option value="EL">Electronic</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="mb-3">
                                    <label class="control-label">Selling Type</label>
                                    <select class="form-control select2">
                                        <option>Select</option>
                                        <option value="FA">Fashion</option>
                                        <option value="EL">Electronic</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="mb-3">
                                    <label for="description">Description</label>
                                    <textarea class="form-control" id="description" rows="5" placeholder="Description"></textarea>
                                </div>
                            </div>
                            {{-- this here mark the start of Pricing & Stocks  --}}
                            <h3 class="card-title mb-3 mt-3"><i class='bx bx-purchase-tag'></i> Pricing & Stocks</h3>
                            <hr>
                            <div class="col-sm-4">
                                <x-dashboard.form.text label="Quantity" name='quantity'>
                                </x-dashboard.form.text>
                            </div>
                            <div class="col-sm-4">
                                <x-dashboard.form.text label="Price" name='price'>
                                </x-dashboard.form.text>
                            </div>
                            <div class="col-sm-4">
                                <div class="mb-3">
                                    <label class="control-label">Tax Type</label>
                                    <select class="form-control select2">
                                        <option>Select</option>
                                        <option value="FA">Fashion</option>
                                        <option value="EL">Electronic</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="mb-3">
                                    <label class="control-label">Discount Type</label>
                                    <select class="form-control select2">
                                        <option>Select</option>
                                        <option value="FA">Fashion</option>
                                        <option value="EL">Electronic</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <x-dashboard.form.text label="Discount Value" name="discountvalue">
                                </x-dashboard.form.text>
                            </div>
                            <div class="col-sm-4">
                                <x-dashboard.form.text label="Quantity Alert" name='quantityalert'>
                                </x-dashboard.form.text>
                            </div>
                            {{-- this here mark the start of Images  --}}
                            <h3 class="card-title mb-3 mt-3"><i class='bx bxs-image-alt'></i> Image</h3>
                            <hr>

                            <div class="image-group row">
                                <div class="col-sm-2">
                                    <div class="mb-3">
                                        <label class="control-label"><i class='bx bx-plus-circle'></i> Add
                                            Image</label>
                                        <input type="file" class="form-control">
                                    </div>
                                </div>
                                <div class="col-sm-2 mb-3">
                                    <img src="{{ asset('upload/default.png') }}" alt=""
                                        class="rounded mx-auto d-block">
                                </div>
                            </div>
                            {{-- this here mark the start of Custom Fields  --}}
                            <h3 class="card-title mb-3 mt-3"><i class='bx bx-list-plus'></i> Custom Fields</h3>
                            <hr>

                            <div class="col-sm-12">
                                <div class="mb-3 d-flex gap-5">
                                    <div class="form-check ">
                                        <input class="form-check-input" type="checkbox" value=""
                                            id="flexCheckDefault">
                                        <label class="form-check-label" for="flexCheckDefault">
                                            Warranties
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value=""
                                            id="flexCheckChecked">
                                        <label class="form-check-label" for="flexCheckChecked">
                                            Manufacturer
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value=""
                                            id="ramdomid">
                                        <label class="form-check-label" for="ramdomid">
                                            Expiry
                                        </label>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="col-sm-12">
                                <div class="mb-3 col-sm-3">
                                    <label class="control-label">Discount Type</label>
                                    <select class="form-control select2">
                                        <option>Select</option>
                                        <option value="FA">Fashion</option>
                                        <option value="EL">Electronic</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <x-dashboard.form.text label="Quantity Alert" name="quantityalert">
                                </x-dashboard.form.text>
                            </div>
                            <div class="col-sm-4">
                                <div class="mb-3">
                                    <label class="control-label">Manufactured Date</label>
                                    <input type="date" name="manufactureddate" class="form-control">
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="mb-3">
                                    <label class="control-label">Expiry On</label>
                                    <input type="date" name="expiryon" class="form-control">
                                </div>
                            </div>






                        </div>

                        <div class="d-flex flex-wrap gap-2">
                            <button type="submit" class="btn btn-primary waves-effect waves-light">Save
                                Changes</button>
                            <button type="button" class="btn btn-secondary waves-effect waves-light">Cancel</button>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>

</x-dashboard.admin>
