<x-dashboard.main>
    <x-slot:sidebar>
        <x-dashboard.sidebar.admin />
    </x-slot:sidebar>
    <x-slot:header>
        <x-dashboard.header.main />
    </x-slot:header>
<!-- start page title -->
<div class="row">
    <div class="col-12">
        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
            <h4 class="mb-sm-0 font-size-18">{{$title}}</h4>
        </div>
    </div>
</div>
<!-- end page title -->
    {{ $slot }}
</x-dashboard.main>
