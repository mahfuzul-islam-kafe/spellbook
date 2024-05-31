<x-dashboard.admin title='All Category'>
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">

                    <h4 class="card-title">Category Datatable</h4>
                    <p class="card-title-desc">
                        somthings will be here
                    </p>
                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-primary mb-3" data-bs-toggle="modal"
                        data-bs-target="#categoryadding">
                        Add Category
                    </button>

                    <table id="datatable" class="table table-bordered dt-responsive  nowrap w-100">
                        <thead>
                            <tr>
                                <th>Category name</th>
                                <th>Category Sulg</th>
                                <th>Product Count</th>
                                <th>Sub-Category Count</th>
                                <th>Actions</th>

                            </tr>
                        </thead>


                        <tbody>
                            @foreach ($categories as $category)
                                <tr>
                                    <td>{{ $category->category }}</td>
                                    <td>{{ $category->category_slug }}</td>
                                    <td>{{ $category->product_count }}</td>
                                    <td>{{ $category->sub_category_count }}</td>
                                    <td>
                                        {{-- <a href="" class="btn btn-warning">edit</a> --}}
                                        <a href="{{ route('delete.category', $category->id) }}"
                                            class="btn btn-danger">delete</a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>

                </div>
            </div>
        </div> <!-- end col -->
    </div> <!-- end row -->
    {{-- modal for category adding  --}}
    @include('pages.modal.modal')


</x-dashboard.admin>
