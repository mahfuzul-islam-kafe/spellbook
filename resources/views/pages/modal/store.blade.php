


<!--Store adding  Modal -->
<div class="modal fade" id="storeadding" tabindex="-1" aria-labelledby="storeaddingLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="storeaddingLabel">Add A New Srore</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="{{ route('add.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <x-dashboard.form.text label='Srore Name' name="store_name"></x-dashboard.form.text>
                        <x-dashboard.form.text label='User Name' name="user_name"></x-dashboard.form.text>
                        <x-dashboard.form.text label='Phone' name="phone"></x-dashboard.form.text>
                        <x-dashboard.form.text label='Email' name="email"></x-dashboard.form.text>
                        <label for="status">Status</label>
                        <select class="form-control select2" name="status">
                            <option value="">Select</option>
                            <option value="active">Active</option>
                            <option value="inactive">Inactive</option>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary mt-2">Save Srore</button>
                </form>
            </div>
        </div>
    </div>
</div>
