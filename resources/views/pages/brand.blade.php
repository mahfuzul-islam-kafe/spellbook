<x-dashboard.admin title='All Brand'>
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">

                    <h4 class="card-title">Brand Datatable</h4>
                    <p class="card-title-desc">
                        somthings will be here
                    </p>
                    {{-- modal for brand adding button --}}
                    
                    <x-dashboard.form.model_triggering label="Add Brand" target="brandadding"></x-dashboard>
                        @include('pages.modal.brand')

                        <table id="datatable" class="table table-bordered dt-responsive  nowrap w-100">
                            <thead>
                                <tr>
                                    <th>Brand Title</th>
                                    <th>Brand Category</th>
                                    <th>Brand Product Count</th>
                                    <th>Actions</th>

                                </tr>
                            </thead>
                            @foreach ($brands as $brand)
                                <tbody>
                                    <tr>
                                        <td>{{ $brand->brand_title }}</td>
                                        <td>{{ $brand->brand_category }}</td>
                                        <td>{{ $brand->product_count }}</td>
                                        <td>
                                            <a href="{{ route('edit.brand', $brand->id) }}"
                                                class="btn btn-warning">Edit</a>
                                            <a href="{{ route('delete.brand', $brand->id) }}"
                                                class="btn btn-danger">Delete</a>
                                        </td>
                                    </tr>
                                </tbody>
                            @endforeach


                        </table>

                </div>
            </div>
        </div> <!-- end col -->
    </div> <!-- end row -->

</x-dashboard.admin>
