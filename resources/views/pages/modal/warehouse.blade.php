<!-- Button trigger modal -->
<button type="button" class="btn text-info " data-bs-toggle="modal" data-bs-target="#storeadding">
    <i class='bx bx-plus-circle'></i>Add Warehouse
</button>



<!--Store adding  Modal -->
<div class="modal fade" id="storeadding" tabindex="-1" aria-labelledby="storeaddingLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="storeaddingLabel">Add A New Srore</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="{{ route('add.warehouse') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <x-dashboard.form.text label='Warehouse' name="warehouse"></x-dashboard.form.text>
                        <x-dashboard.form.text label='Contact Person' name="contact_person"></x-dashboard.form.text>
                        <x-dashboard.form.text label='Phone' name="phone"></x-dashboard.form.text>
                        <x-dashboard.form.text label='Total Products' name="total_products"></x-dashboard.form.text>
                        <x-dashboard.form.text label='Stock' name="stock"></x-dashboard.form.text>
                        <x-dashboard.form.text label='Quantity' name="quantity"></x-dashboard.form.text>
                        <label for="status">Status</label>
                        <select class="form-control select2" name="status">
                            <option value="">Select</option>
                            <option value="active">Active</option>
                            <option value="inactive">Inactive</option>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary mt-3">Save Warehouse</button>
                </form>
            </div>
        </div>
    </div>
</div>

