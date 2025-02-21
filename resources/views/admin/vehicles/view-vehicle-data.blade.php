<x-layouts.app>
    <div class="mx-44">
        <div class="flex items-center justify-between mt-5 mb-5">
            <h1 class="text-2xl font-bold">Data Kendaran</h1>
            <a href="{{ route('vehicles.create') }}" class="text-white bg-green-600 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">Tambah Data Kendaraan</a>
        </div>
        <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
            <table class="w-full text-sm text-left text-gray-500 rtl:text-right dark:text-gray-400">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                    <tr>
                        <th scope="col" class="px-6 py-3">
                            Nama Kendaraan
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Bahan Bakar
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Plat Nomor
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Warna Kendaraan
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Tipe Kendaraan
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Jumlah Kursi Kendaraan
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Harga Sewa Kendaraan
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Tahun Kendaraan
                        </th>
                        <th scope="col" class="px-6 py-3">
                            CC Mesin Kendaraan
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Jumlah Pintu Kendaraan
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Transmisi Kendaraan
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Merk Kendaraan
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Status Kendaraan
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Gambar Kendaraan
                        </th>
                        <th scope="col" class="px-6 py-3">
                            OPSI
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($vehicles as $vehicle)
                    <tr
                        class="border-b border-gray-200 odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 dark:border-gray-700">
                        <th scope="row"
                            class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            {{ $vehicle->vehicle_name }}
                        </th>
                        <td class="px-6 py-4">
                            {{ $vehicle->petrol }}
                        </td>
                        <td class="px-6 py-4">
                            {{ $vehicle->plate }}
                        </td>
                        <td class="px-6 py-4">
                            {{ $vehicle->vehicle_color }}
                        </td>
                        <td class="px-6 py-4">
                            {{ $vehicle->vehicle_type }}
                        </td>
                        <td class="px-6 py-4">
                            {{ $vehicle->vehicle_seat }}
                        </td>
                        <td class="px-6 py-4">
                            {{ $vehicle->vehicle_price }}
                        </td>
                        <td class="px-6 py-4">
                            {{ $vehicle->vehicle_year }}
                        </td>
                        <td class="px-6 py-4">
                            {{ $vehicle->vehicle_engine }}
                        </td>
                        <td class="px-6 py-4">
                            {{ $vehicle->vehicle_doors }}
                        </td>
                        <td class="px-6 py-4">
                            {{ $vehicle->vehicle_transmision }}
                        </td>
                        <td class="px-6 py-4">
                            {{ $vehicle->vehicle_merk }}
                        </td>
                        <td class="px-6 py-4">
                            {{ $vehicle->vehicle_status }}
                        </td>
                        <td class="px-6 py-4">
                            <img src="{{ asset('storage/'. $vehicle->vehicle_image) }}" width="100" alt="">
                        </td>
                        <td class="px-6 py-4">
                            <a href="#"
                                class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

    </div>
</x-layouts.app>
