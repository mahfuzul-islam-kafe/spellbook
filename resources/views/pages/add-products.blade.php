<x-dashboard.admin title='Add Product'>
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">

                    <h4 class="card-title">Add Product</h4>
                    <p class="card-title-desc">Fill all information below</p>

                    <form action="{{route('store.product')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="mb-3">
                                    <label class="control-label">Store</label>
                                    <select class="form-control select2" name="store">
                                        <option>Select</option>
                                        <option value="test_store_1">test store 1</option>
                                        <option value="test_store_2">test store 2</option>
                                    </select>
                                </div>

                            </div>
                            <div class="col-sm-6">
                                <div class="mb-3">
                                    <label class="control-label"  >Warehouse</label>
                                    <select class="form-control select2" name="warehouse" >
                                        <option>Select</option>
                                        <option value="test_warehouse_1">test Warehouse 1</option>
                                        <option value="test_warehouse_2">test Warehouse 1</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <x-dashboard.form.text label="Product Name" name='product_name'>
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
                                    <label class="control-label">Category <button class="btn text-info"><i class='bx bx-plus-circle'></i>Add Category</button></label>
                                    <select class="form-control select2" name="category">
                                        <option>Select</option>
                                        <option value="test_category_1">test category 1</option>
                                        <option value="test_category_2">test category 2</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="mb-3">
                                    <label class="control-label ">Sub Category <button class="btn text-info"><i class='bx bx-plus-circle'></i>Add Sub Category</button></label>
                                    <select class="form-control select2" name="sub_category">
                                        <option>Select</option>
                                        <option value="test_sub_category_1">test sub category 1</option>
                                        <option value="test_sub_category_2">test sub category 2</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="mb-3">
                                    <label class="control-label ">Sub Sub Category <button class="btn text-info"><i class='bx bx-plus-circle'></i>Add Sub Sub Category</button></label>
                                    <select class="form-control select2" name="sub_sub_category">
                                        <option>Select</option>
                                        <option value="test_sub_sub_category_1">test sub sub category 1</option>
                                        <option value="test_sub_sub_category_2">test sub sub category 2</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="mb-3">
                                    <label class="control-label">Brand <button class="btn text-info"><i
                                                class='bx bx-plus-circle'></i>Add Brand</button></label>
                                    <select class="form-control select2" name="brand">
                                        <option>Select</option>
                                        <option value="test_brand_1">test brand 1</option>
                                        <option value="test_brand_2">test brand 2</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="mb-3">
                                    <label class="control-label mb-4">Unit</label>
                                    <select class="form-control select2" name="unit">
                                        <option>Select</option>
                                        <option value="kg">KG</option>
                                        <option value="pc">PC</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="mb-3">
                                    <label class="control-label mb-4">Selling Type</label>
                                    <select class="form-control select2" name="selling_type">
                                        <option>Select</option>
                                        <option value="transactional">Transactional selling</option>
                                        <option value="solution">Solution selling</option>
                                    </select>
                                </div>
                            </div>

                            <div class="col-sm-6">
                                <div class="mb-3">
                                    <label class="control-label">Barcode Symbology</label>
                                    <select class="form-control select2" name="barcode_symbology">
                                        <option>Select</option>
                                        <option value="test_barcode_symbology_1">test Barcode Symbology 1</option>
                                        <option value="test_barcode_symbology_2">test Barcode Symbology 2</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <x-dashboard.form.text label="Item Code" name="item_code"></x-dashboard.form.text>
                            </div>
                            <div class="col-sm-12">
                                <div class="mb-3">
                                    <label for="description">Description</label>
                                    <textarea class="form-control" id="description" name="description" rows="5" placeholder="Description"></textarea>
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
                                    <select class="form-control select2" name="tax_type">
                                        <option>Select</option>
                                        <option value="test_tax_type_1">tax type 1</option>
                                        <option value="test_tax_type_2">tax type 2</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="mb-3">
                                    <label class="control-label">Discount Type</label>
                                    <select class="form-control select2" name="discount_type">
                                        <option>Select</option>
                                        <option value="discount_type_1">discount_type 1</option>
                                        <option value="discount_type_2">discount_type 2</option>
                                    </select>
                                </div>
                            </div>
                            
                            <div class="col-sm-4">
                                <x-dashboard.form.text label="Discount Value" name="discountvalue">
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
                                        <input type="file" class="form-control" name="image">
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
                                        <input class="form-check-input" type="checkbox" value="warranties"
                                            id="warranties" name="warranties">
                                        <label class="form-check-label" for="warranties">
                                            Warranties
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="manufacturer"
                                            id="manufacturer" name="manufacturer">
                                        <label class="form-check-label" for="manufacturer">
                                            Manufacturer
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="expiry"
                                            id="expiry" name="expiry"> 
                                        <label class="form-check-label" for="expiry">
                                            Expiry
                                        </label>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="col-sm-12 row">
                                <div class="col-sm-4">
                                    <div class="mb-3">
                                        <label class="control-label">Vendor <button class="btn text-info"><i class='bx bx-plus-circle'></i>Add Vendor</button></label>
                                        <select class="form-control select2" name="vendor">
                                            <option>Select</option>
                                            <option value="test_vendor_1">test_vendor_1</option>
                                            <option value="test_vendor_2">test_vendor_2</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <x-dashboard.form.text label="Quantity Alert" name="quantityalert">
                                </x-dashboard.form.text>
                            </div>
                            <div class="col-sm-4">
                                <div class="mb-3">
                                    <label class="control-label">Manufactured Date</label>
                                    <input type="date" name="manufactureddate" class="form-control" >
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
                                Product</button>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>

</x-dashboard.admin>
