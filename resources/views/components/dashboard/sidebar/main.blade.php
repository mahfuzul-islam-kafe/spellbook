{{-- Do not directly use this component --}}

<div class="vertical-menu" style="">

    <div data-simplebar class="h-100">

        <!--- Sidemenu -->
        <div id="sidebar-menu">
            <!-- Left Menu Start -->
            <ul class="metismenu list-unstyled" id="side-menu">

                {{ $slot }}
            </ul>
        </div>
        <!-- Sidebar -->
    </div>
</div>
