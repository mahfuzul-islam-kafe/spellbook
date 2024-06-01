<x-dashboard.admin title='All Vendor'>
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">

                    <h4 class="card-title">Vendor Datatable</h4>
                    <p class="card-title-desc">
                        somthings will be here
                    </p>
                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-primary mb-3" data-bs-toggle="modal"
                        data-bs-target="#vendoradding">
                        Add Vandor
                    </button>

                    <table id="datatable" class="table table-bordered dt-responsive  nowrap w-100">
                        <thead>
                            <tr>
                                <th>Vendor Name</th>
                                <th>Vendor Slug</th>
                                <th>Vendor Product Name</th>
                                <th>Vendor Contact</th>
                                <th>Vendor Type</th>
                                <th>Vendor note</th>
                                <th>Actions</th>
                            </tr>
                        </thead>

                        <tbody>

                        </tbody>
                    </table>

                </div>
            </div>
        </div> <!-- end col -->
    </div> <!-- end row -->
    {{-- modal for category adding  --}}
    @include('pages.modal.modal')

</x-dashboard.admin>
