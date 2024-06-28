
<!--vendir adding  Modal -->
<div class="modal fade" id="vendoradding" tabindex="-1" aria-labelledby="vendoraddingLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="vendoraddingLabel">Add A New Vendor</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="{{ route('add.vendor') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <x-dashboard.form.text label='Vendor Title' name="vendor_name"></x-dashboard.form.text>
                        <x-dashboard.form.text label='Vendor Product' name="product_name"></x-dashboard.form.text>
                        <x-dashboard.form.text label='Vendor Contact' name="vendor_contact"></x-dashboard.form.text>
                        <x-dashboard.form.text label='Vendor Type' name="vendor_type"></x-dashboard.form.text>
                        <div class="mb-3">
                            <label for="vendor_note">Note</label>
                            <textarea name="note" id="vendor_note" cols="30" rows="5" class="form-control" placeholder="Vandor Note"></textarea>
                        </div>

                    </div>
                    <button type="submit" class="btn btn-primary mt-2">Save Vendor</button>
                </form>
            </div>
        </div>
    </div>
</div>
