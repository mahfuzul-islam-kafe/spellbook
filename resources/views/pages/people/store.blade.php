<x-dashboard.admin title='All stores'>
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">

                    <h4 class="card-title">Store Datatable</h4>
                    <p class="card-title-desc">
                        somthings will be here
                    </p>
                    {{-- modal for category adding  --}}
                    @include('pages.modal.store')

                    <table id="datatable" class="table table-bordered dt-responsive  nowrap w-100">
                        <thead>
                            <tr>
                                <th>Store Name</th>
                                <th>Store User Name</th>
                                <th>Store Phone</th>
                                <th>Store Email</th>
                                <th>Store Status</th>
                                <th>Actions</th>
                            </tr>
                        </thead>

                        <tbody>

                            {{-- @foreach ($stores as $store)
                                <tr>
                                    <td>{{ $store->store_name }}</td>
                                    <td>{{ $store->user_name }}</td>
                                    <td>{{ $store->phone }}</td>
                                    <td>{{ $store->email }}</td>
                                    <td class="{{ $store->status == 'inactive' ? 'text-danger' : 'text-success' }}">
                                        {{ $store->status }}</td>
                                    <td>
                                        <a href="{{ route('edit.store', $store->id) }}"
                                            class="btn btn-warning">Edit</a>
                                        <a href="{{ route('delete.store', $store->id) }}"
                                            class="btn btn-danger">Delete</a>
                                    </td>
                                </tr>
                            @endforeach --}}
                        </tbody>

                    </table>

                </div>
            </div>
        </div> <!-- end col -->
    </div> <!-- end row -->


</x-dashboard.admin>
