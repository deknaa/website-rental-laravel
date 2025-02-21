<x-layouts.app>
    <div class="mx-44">
        <h1 class="text-2xl font-bold">Edit Data Kendaraan</h1>
        <p class="text-sm">Edit data unit kendaraan</p>
        <form action="{{ route('vehicles.update', $vehicle->id) }}" method="POST" class="mt-5" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="grid grid-cols-2 gap-2">
                <div class="">
                    <label for="vehicle_name">Nama Kendaraan</label><br>
                    <input type="text" name="vehicle_name" id="vehicle_name"
                        class="w-full p-2 border-2 border-green-600 rounded-lg" placeholder="Nama Kendaraan.."
                        value="{{ old('vehicle_name', $vehicle->vehicle_name) }}">
                </div>
                <div class="">
                    <label for="petrol">Bahan Bakar Kendaraan</label><br>
                    <select name="petrol" id="petrol"
                        class="w-full p-2 text-white bg-green-500 border border-green-600 rounded-lg">
                        @foreach ($petrols as $petrol)
                            <option value="{{ $petrol }}" {{ old('petrol', $vehicle->petrol) == $petrol ? 'selected' : '' }}>{{ $petrol }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="">
                    <label for="plate">Plat Nomor</label><br>
                    <input type="text" name="plate" id="plate"
                        class="w-full p-2 border-2 border-green-600 rounded-lg" value="{{ old('plate', $vehicle->plate) }}" placeholder="Nama Kendaraan..">
                </div>
                <div class="">
                    <label for="vehicle_color">Warna Kendaraan</label><br>
                    <input type="text" name="vehicle_color" id="vehicle_color"
                        class="w-full p-2 border-2 border-green-600 rounded-lg" value="{{ old('vehicle_color', $vehicle->vehicle_color) }}" placeholder="Nama Kendaraan..">
                </div>
                <div class="">
                    <label for="vehicle_type">Tipe Kendaraan</label><br>
                    <select name="vehicle_type" id="vehicle_type"
                        class="w-full p-2 text-white bg-green-500 border border-green-600 rounded-lg">
                        @foreach ($types as $type)
                            <option value="{{ $type }}" {{ old('vehicle_type', $vehicle->vehicle_type) == $type ? 'selected' : '' }}>{{ $type }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="">
                    <label for="vehicle_seat">Jumlah Kursi Kendaraan</label><br>
                    <input type="number" name="vehicle_seat" id="vehicle_seat"
                        class="w-full p-2 border-2 border-green-600 rounded-lg" value="{{ old('vehicle_seat', $vehicle->vehicle_seat) }}" placeholder="Jumlah Kursi Kendaraan..">
                </div>
                <div class="">
                    <label for="vehicle_price">Harga Sewa Kendaraan</label><br>
                    <input type="number" name="vehicle_price" id="vehicle_price"
                        class="w-full p-2 border-2 border-green-600 rounded-lg" value="{{ old('vehicle_price', $vehicle->vehicle_price) }}" placeholder="Harga Sewa Kendaraan..">
                </div>
                <div class="">
                    <label for="vehicle_year">Tahun Kendaraan</label><br>
                    <input type="date" name="vehicle_year" id="vehicle_year"
                        class="w-full p-2 border-2 border-green-600 rounded-lg" value="{{ old('vehicle_year', $vehicle->vehicle_year) }}">
                </div>
                <div class="">
                    <label for="vehicle_engine">Mesin Kendaraan</label><br>
                    <input type="text" name="vehicle_engine" id="vehicle_engine"
                        class="w-full p-2 border-2 border-green-600 rounded-lg" value="{{ old('vehicle_engine', $vehicle->vehicle_engine) }}" placeholder="CC Mesin Kendaraan..">
                </div>
                <div class="">
                    <label for="vehicle_doors">Jumlah Pintu Kendaraan</label><br>
                    <input type="text" name="vehicle_doors" id="vehicle_doors"
                        class="w-full p-2 border-2 border-green-600 rounded-lg" value="{{ old('vehicle_doors', $vehicle->vehicle_doors) }}" placeholder="Jumlah Pintu Kendaraan..">
                </div>
                <div class="">
                    <label for="vehicle_transmision">Transmisi Kendaraan</label><br>
                    <select name="vehicle_transmision" id="vehicle_transmision"
                        class="w-full p-2 text-white bg-green-500 border border-green-600 rounded-lg">
                        @foreach ($transmisions as $transmision)
                            <option value="{{ $transmision }}">{{ $transmision }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="">
                    <label for="vehicle_merk">Merk Kendaraan</label><br>
                    <input type="text" name="vehicle_merk" id="vehicle_merk"
                        class="w-full p-2 border-2 border-green-600 rounded-lg" value="{{ old('vehicle_merk', $vehicle->vehicle_merk) }}" placeholder="Merk Kendaraan..">
                </div>
                <div class="">
                    <label for="vehicle_status">Status Kendaraan</label><br>
                    <select name="vehicle_status" id="vehicle_status"
                        class="w-full p-2 text-white bg-green-500 border border-green-600 rounded-lg">
                        @foreach ($status as $stats)
                            <option value="{{ $stats }}">{{ $stats }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="">
                    <label for="vehicle_image">Gambar Kendaraan</label><br>
                    <img src="{{ asset('storage/' . $vehicle->vehicle_image) }}" alt="{{ $vehicle->vehicle_name }}" title="{{ $vehicle->vehicle_name }}">
                </div>
            </div>
            <button type="submit"
                class="w-full p-2 mt-5 mb-5 text-white bg-green-600 rounded-lg hover:bg-green-700">Submit</button>
        </form>
    </div>
</x-layouts.app>
