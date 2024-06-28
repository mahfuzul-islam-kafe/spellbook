
<!--brand adding  Modal -->
<div class="modal fade" id="brandadding" tabindex="-1" aria-labelledby="brandaddingLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="brandaddingLabel">Add A New Brand</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="{{ route('add.brand') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <x-dashboard.form.text label='Brand' name="brand_title"></x-dashboard.form.text>
                    </div>
                    <button type="submit" class="btn btn-primary mt-2">Save Brand</button>
                </form>
            </div>
        </div>
    </div>
</div>
