<x-dashboard.admin title='All Warehouse'>
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">

                    <h4 class="card-title">Warehouse Datatable</h4>
                    <p class="card-title-desc">
                        somthings will be here
                    </p>
                    {{-- modal for category adding  --}}
                    <x-dashboard.form.model_triggering label="Add Warehouse" target="warehouseadding"></x-dashboard>
                        @include('pages.modal.warehouse')

                        <table id="datatable" class="table table-bordered dt-responsive  nowrap w-100">
                            <thead>
                                <tr>
                                    <th>Warehouse</th>
                                    <th>Contact Person</th>
                                    <th>Phone</th>
                                    <th>Total Products</th>
                                    <th>Stock</th>
                                    <th>Qty</th>
                                    <th>Status</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>

                            <tbody>

                                @foreach ($warehouses as $warehouse)
                                    <tr>
                                        <td>{{ $warehouse->warehouse }}</td>
                                        <td>{{ $warehouse->contact_person }}</td>
                                        <td>{{ $warehouse->phone }}</td>
                                        <td>{{ $warehouse->total_products }}</td>
                                        <td>{{ $warehouse->stock }}</td>
                                        <td>{{ $warehouse->quantity }}</td>
                                        <td
                                            class="{{ $warehouse->status == 'inactive' ? 'text-danger' : 'text-success' }}">
                                            {{ $warehouse->status }}</td>
                                        <td>
                                            <a href="{{ route('edit.warehouse', $warehouse->id) }}"
                                                class="btn btn-warning">Edit</a>
                                            <a href="{{ route('delete.warehouse', $warehouse->id) }}"
                                                class="btn btn-danger">Delete</a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>

                        </table>

                </div>
            </div>
        </div> <!-- end col -->
    </div> <!-- end row -->


</x-dashboard.admin>
