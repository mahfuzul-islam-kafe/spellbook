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
                                    <td>{{$category->category}}</td>
                                    <td>{{$category->category_slug}}</td>
                                    <td>{{$category->product_count}}</td>
                                    <td>{{$category->sub_category_count}}</td>
                                    <td>
                                        {{-- <a href="" class="btn btn-warning">edit</a> --}}
                                        <a href="{{route('delete.category',$category->id)}}" class="btn btn-danger" >delete</a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>

                </div>
            </div>
        </div> <!-- end col -->
    </div> <!-- end row -->

    <!-- Modal -->
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
                        </div>
                        <button type="submit" class="btn btn-primary mt-2">Save Category</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    
</x-dashboard.admin>
