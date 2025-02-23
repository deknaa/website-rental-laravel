<x-layouts.app>
    <div class="mx-44">
        <h1>Dashboard Admin</h1>
        <div class="grid grid-cols-4 gap-3 mt-5">
            <x-cards 
                totals="{{ $vehicles }}"
                description="Jumlah Kendaraan">
            </x-cards>
            <x-cards>Jumlah Kendaraan Tersewa</x-cards>
            <x-cards>Jumlah Kendaraan Rusak</x-cards>
            <x-cards>Jumlah Kendaraan Tersedia</x-cards>
            <x-cards>Jumlah Pendapatan</x-cards>
        </div>
    </div>
</x-layouts.app>