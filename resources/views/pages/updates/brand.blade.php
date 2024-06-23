<x-dashboard.admin title='Update Brand'>
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">


                    <h4 class="card-title mb-4">Update brand</h4>
                    <form action="{{ route('update.brand',$brand->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <div class="mb-3">
                                <label for="brand">Brand</label>
                                <input id="brand" name="brand_title" type="text"
                                    value="{{ $brand->brand_title }}" class="form-control" placeholder="">
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary mt-2">Save Brand</button>
                    </form>
                </div>
            </div>
        </div> <!-- end col -->
    </div> <!-- end row -->



</x-dashboard.admin>
