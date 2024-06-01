<x-dashboard.admin title='All Sub Category'>
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">

                    <h4 class="card-title">Sub Category Datatable</h4>
                    <p class="card-title-desc">
                        somthings will be here
                    </p>
                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-primary mb-3" data-bs-toggle="modal"
                        data-bs-target="#subcategoryadding">
                        Add Sub Category
                    </button>

                    <table id="datatable" class="table table-bordered dt-responsive  nowrap w-100">
                        <thead>
                            <tr>
                                <th>Sub Category name</th>
                                <th>Sub Category Sulg</th>
                                <th>Sub Categroy Product Count</th>
                                <th>Sub Categroy Count</th>
                                <th>Actions</th>

                            </tr>
                        </thead>
                        @foreach ($subs as $sub)
                        <tbody>
                            <tr>
                                <td>{{ $sub->sub_category }}</td>
                                <td>{{ $sub->sub_category_slug }}</td>
                                <td>{{ $sub->product_count }}</td>
                                <td>{{ $sub->category_count }}</td>
                                <td>
                                    <a href="{{ route('delete.sub-category', $sub->id) }}"
                                        class="btn btn-danger">delete</a>
                                </td>
                            </tr>
                        </tbody>
                        @endforeach

                        
                    </table>

                </div>
            </div>
        </div> <!-- end col -->
    </div> <!-- end row -->
    {{-- modal for category adding  --}}
    @include('pages.modal.modal')
</x-dashboard.admin>
