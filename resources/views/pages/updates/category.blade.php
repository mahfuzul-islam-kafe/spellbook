<x-dashboard.admin title='All Category'>
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">


                    <h4 class="card-title mb-4">Update Category</h4>
                    <form action="{{ route('update.category',$editcategory->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <div class="mb-3">
                                <label for="category">Category</label>
                                <input id="category" name="category" type="text"
                                    value="{{ $editcategory->category }}" class="form-control" placeholder="">
                            </div>
                            <div class="mb-3">
                                <label class="control-label">Categories</label>
                                <select class="form-control select2" name="parent_id">
                                    <option value="">Select</option>
                                    @foreach ($categories as $category)
                                        <option value="{{ $category->id }}"
                                            {{ $editcategory->parent_id == $category->id ? 'selected' : '' }}>
                                            {{ $category->category }}</option>
                                    @endforeach

                                </select>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary mt-2">Save Category</button>
                    </form>
                </div>
            </div>
        </div> <!-- end col -->
    </div> <!-- end row -->



</x-dashboard.admin>
