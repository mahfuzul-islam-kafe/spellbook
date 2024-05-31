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
                    </div>
                    <button type="submit" class="btn btn-primary mt-2">Save Category</button>
                </form>
            </div>
        </div>
    </div>
</div>
