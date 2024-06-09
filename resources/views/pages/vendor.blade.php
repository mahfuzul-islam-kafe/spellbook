<x-dashboard.admin title='All Vendor'>
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">

                    <h4 class="card-title">Vendor Datatable</h4>
                    <p class="card-title-desc">
                        somthings will be here
                    </p>
                    {{-- modal for category adding  --}}
  @include('pages.modal.vendor')

                    <table id="datatable" class="table table-bordered dt-responsive  nowrap w-100">
                        <thead>
                            <tr>
                                <th>Vendor Name</th>
                                <th>Vendor Product Name</th>
                                <th>Vendor Contact</th>
                                <th>Vendor Type</th>
                                <th>Vendor note</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        @foreach ($vendors as $vendor)
                            
                        <tbody>
                            <tr>
                                <td>{{$vendor->vendor_name}}</td>
                                <td>{{$vendor->product_name}}</td>
                                <td>{{$vendor->vendor_contact}}</td>
                                <td>{{$vendor->vendor_type}}</td>
                                <td>{{$vendor->note}}</td>
                                <td>
                                    <a href="{{ route('delete.vendor', $vendor->id) }}"
                                        class="btn btn-danger">delete</a>
                                </td>
                            </tr>
                        </tbody>
                        @endforeach
                    </table>

                </div>
            </div>
        </div> <!-- end col -->
    </div> <!-- end row -->
    

</x-dashboard.admin>
