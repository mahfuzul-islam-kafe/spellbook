<x-dashboard.sidebar.main>
    <x-dashboard.sidebar.nav.title label="Item 1" />

    <x-dashboard.sidebar.nav.list label="Products" icon="bx-package">
        <x-dashboard.sidebar.nav.item label="Products" :href="route('products')" />
        <x-dashboard.sidebar.nav.item label="Add Products" :href="route('add.products')" />
    </x-dashboard.sidebar.nav.list>
    <x-dashboard.sidebar.nav.list label="Category" icon="bx-category">
        <x-dashboard.sidebar.nav.item label="Category" :href="route('categories')" />
    </x-dashboard.sidebar.nav.list>
</x-dashboard.sidebar.main>