<x-dashboard.admin title='Add Product'>

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">


                    {{-- <img src="{{ Storage::url($image->image) }}" width="300"> --}}

                    <h4 class="card-title">Add Product</h4>
                    <p class="card-title-desc">Fill all information below</p>

                    <form action="{{ route('store.product') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="mb-3">
                                    <label class="control-label">Store</label>
                                    <x-dashboard.form.model_triggering label="Add Store"
                                        target="storeadding"></x-dashboard>
                                        <select class="form-control select2" name="store">
                                            <option value="">Select</option>
                                            @foreach ($stores as $store)
                                                <option value="{{ $store->user_name }}">{{ $store->store_name }}
                                                </option>
                                            @endforeach
                                        </select>
                                </div>

                            </div>
                            <div class="col-sm-6">
                                <div class="mb-3">
                                    <label class="control-label">Warehouse</label>
                                     <x-dashboard.form.model_triggering label="Add Warehouse"
                                     target="warehouseadding"></x-dashboard>
                                    <select class="form-control select2" name="warehouse">
                                        <option value="">Select</option>
                                        @foreach ($warehouses as $warehouse)
                                            <option value="{{ $warehouse->warehouse }}">{{ $warehouse->warehouse }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <x-dashboard.form.text label="Product Name" name='product_name'>
                                </x-dashboard.form.text>
                            </div>

                            <div class="col-sm-6">
                                <x-dashboard.form.text label="SKU" name='sku'>
                                </x-dashboard.form.text>
                            </div>
                            <div class="col-sm-4">
                                <div class="mb-3">
                                    {{-- modal for category adding  --}}

                                    <label class="control-label">Category </label>
                                    <x-dashboard.form.model_triggering label="Add Category"
                                        target="categoryadding"></x-dashboard>
                                        {{-- @include('pages.modal.category') --}}
                                        <select class="form-control select2" name="category">
                                            <option value="">Select</option>
                                            @foreach ($categories as $category)
                                                <option value="{{ $category->id }}" class="fw-bold">
                                                    {{ $category->category }}</option>
                                                @foreach ($category->children as $child)
                                                    <option value="{{ $child->id }}">{{ $child->category }}
                                                    </option>
                                                @endforeach
                                            @endforeach
                                        </select>
                                </div>
                            </div>

                            <div class="col-sm-4">
                                <div class="mb-3">
                                    <label class="control-label">Brand </label>
                                    <x-dashboard.form.model_triggering label="Add Brand"
                                        target="brandadding"></x-dashboard>

                                        <select class="form-control select2" name="brand">
                                            <option value="">Select</option>

                                            @foreach ($brands as $brand)
                                                <option value="{{ $brand->brand_slug }}">{{ $brand->brand_title }}
                                                </option>
                                            @endforeach

                                        </select>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="mb-3">
                                    <label class="control-label mb-3">Unit</label>
                                    <select class="form-control select2" name="unit">
                                        <option>Select</option>
                                        <option value="kg" selected>KG</option>
                                        <option value="pc">PC</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="mb-3">
                                    <label class="control-label mb-3">Selling Type</label>
                                    <select class="form-control select2" name="selling_type">
                                        <option>Select</option>
                                        <option value="transactional" selected>Transactional selling</option>
                                        <option value="solution">Solution selling</option>
                                    </select>
                                </div>
                            </div>

                            <div class="col-sm-6">
                                <div class="mb-3">
                                    <label class="control-label mb-3">Barcode Symbology</label>
                                    <select class="form-control select2" name="barcode_symbology">
                                        <option value="">Select</option>
                                        <option value="code_34">Code 34</option>
                                        <option value="code_35">Code 35</option>
                                        <option value="code_36">Code 36</option>
                                    </select>
                                </div>
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
                                        <label class="control-label"><i class='bx bx-plus-circle'></i> Add Image</label>
                                        <input type="file" class="form-control" name="images[]" multiple onchange="previewImages(event)">
                                    </div>
                                </div>
                                <div class="col-sm-3 mb-3" id="imagePreview">
                                    <img src="{{ asset('upload/default.png') }}" alt="" class="rounded mx-auto d-block">
                                </div>
                            </div>
                            
                            
                            {{-- this here mark the start of Custom Fields  --}}
                            <h3 class="card-title mb-3 mt-3"><i class='bx bx-list-plus'></i> Custom Fields</h3>
                            <hr>



                            <div class="col-sm-12 row">
                                <div class="col-sm-4">
                                    <div class="mb-3">
                                        <label class="control-label">Vendor</label>
                                        <x-dashboard.form.model_triggering label="Add Vendor"
                                            target="vendoradding"></x-dashboard>
                                            <select class="form-control select2 mt-2" name="vendor">
                                                <option value="">Select</option>
                                                @foreach ($vendors as $vendor)
                                                    {{ $vendor->vendor_name }}
                                                @endforeach
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
                                Product</button>
                        </div>
                    </form>
                    @include('pages.modal.category')
                    @include('pages.modal.brand')
                    @include('pages.modal.vendor')
                    @include('pages.modal.store')
                    @include('pages.modal.warehouse')
                </div>
            </div>
        </div>
    </div>
    <script>
        function previewImages(event) {
            var files = event.target.files;
            var previewContainer = document.getElementById('imagePreview');
            previewContainer.innerHTML = '';
            var rowDiv = document.createElement('div');
            rowDiv.className = 'row';
            for (var i = 0; i < files.length; i++) {
                var file = files[i];
                var reader = new FileReader();
                reader.onload = function(e) {
                    var colDiv = document.createElement('div');
                    colDiv.className = 'col-3'; // Adjust the number to control the width of each image
                    var img = document.createElement('img');
                    img.src = e.target.result;
                    img.className = 'rounded img-fluid'; // Use img-fluid to make sure the images are responsive
                    img.style.margin = '10px';
                    colDiv.appendChild(img);
                    rowDiv.appendChild(colDiv);
                };
                reader.readAsDataURL(file);
            }
            previewContainer.appendChild(rowDiv);
        }
    </script>
</x-dashboard.admin>
