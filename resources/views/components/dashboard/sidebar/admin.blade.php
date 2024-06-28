<x-dashboard.sidebar.main>
    <x-dashboard.sidebar.nav.title label="Item 1" />

    <x-dashboard.sidebar.nav.list label="Products" icon="bx-package">
        <x-dashboard.sidebar.nav.item label="Products" :href="route('products')" />
        <x-dashboard.sidebar.nav.item label="Add Products" :href="route('add.products')" />
    </x-dashboard.sidebar.nav.list>
    <x-dashboard.sidebar.nav.list label="Category" icon="bx-duplicate">
        <x-dashboard.sidebar.nav.item label="Categories" :href="route('categories')" />
        <x-dashboard.sidebar.nav.item label="Brands" :href="route('brands')" />
    </x-dashboard.sidebar.nav.list>
    <x-dashboard.sidebar.nav.list label="Peoples" icon="bx-duplicate">
        
        <x-dashboard.sidebar.nav.item label="Stores" :href="route('stores')" />
        <x-dashboard.sidebar.nav.item label="Warehouse" :href="route('warehouse')" />
        <x-dashboard.sidebar.nav.item label="Vendors" :href="route('vendors')" />
    </x-dashboard.sidebar.nav.list>
    <x-dashboard.sidebar.nav.list label="Test" icon="bx-duplicate">
        
        <x-dashboard.sidebar.nav.item label="Test" :href="route('test')" />
    </x-dashboard.sidebar.nav.list>
</x-dashboard.sidebar.main>