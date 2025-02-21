<?php

namespace App\Http\Controllers;

use App\Models\Vehicles;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class VehiclesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $vehicles = Vehicles::all();
        return view('admin.vehicles.view-vehicle-data', compact('vehicles'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $petrols = ['pertalite', 'solar', 'pertamax', 'pertamax_turbo'];
        $types = ['motor', 'mobil', 'truck'];
        $transmisions = ['manual', 'automatic'];
        $status = ['tersedia', 'disewa', 'maintenance', 'tidak_tersedia', 'sudah_dibooking'];

        return view('admin.vehicles.create-vehicle-data', compact('petrols', 'types', 'transmisions', 'status'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // validasi
       $request->validate([
            'vehicle_name' => 'required|string|max:255',
            'petrol' => 'required|in:pertalite,solar,pertamax,pertamax_turbo',
            'plate' => 'required|string',
            'vehicle_color' => 'required|string',
            'vehicle_type' => 'required|in:motor,mobil,truck',
            'vehicle_seat' => 'required|numeric|min:1',
            'vehicle_price' => 'required|numeric|min:0',
            'vehicle_year' => 'required|date',
            'vehicle_engine' => 'required|numeric|min:0',
            'vehicle_doors' => 'required|numeric|min:0',
            'vehicle_transmision' => 'required|in:manual,automatic',
            'vehicle_merk' => 'required|string',
            'vehicle_status' => 'required|in:tersedia,disewa,maintenance,tidak_tersedia,sudah_dibooking',
            'vehicle_image' => 'required|image|mimes:jpg,jpeg,png|max:2048',
       ]);

       // save the image
       $imagePath = $request->file('vehicle_image') ? $request->file('vehicle_image')->store('vehicles', 'public') : null;

       // save to database
       Vehicles::create([
            'vehicle_name' => $request->vehicle_name,
            'petrol' => $request->petrol,
            'plate' => $request->plate,
            'vehicle_color' => $request->vehicle_color,
            'vehicle_type' => $request->vehicle_type,
            'vehicle_seat' => $request->vehicle_seat,
            'vehicle_price' => $request->vehicle_price,
            'vehicle_year' => $request->vehicle_year,
            'vehicle_engine' => $request->vehicle_engine,
            'vehicle_doors' => $request->vehicle_doors,
            'vehicle_transmision' => $request->vehicle_transmision,
            'vehicle_merk' => $request->vehicle_merk,
            'vehicle_status' => $request->vehicle_status,
            'vehicle_image' => $imagePath,
       ]);

       return redirect()->route('vehicles.index')->with('success', 'Sukses menambahkan kendaraan baru');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Vehicles $vehicle)
    {
        $petrols = ['pertalite', 'solar', 'pertamax', 'pertamax_turbo'];
        $types = ['motor', 'mobil', 'truck'];
        $transmisions = ['manual', 'automatic'];
        $status = ['tersedia', 'disewa', 'maintenance', 'tidak_tersedia', 'sudah_dibooking'];

        return view('admin.vehicles.edit-vehicle-data', compact('vehicle', 'petrols', 'types', 'transmisions', 'status'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Vehicles $vehicle)
    {
        $request->validate([
            'vehicle_name' => 'string|max:255',
            'petrol' => 'in:pertalite,solar,pertamax,pertamax_turbo',
            'plate' => 'string',
            'vehicle_color' => 'string',
            'vehicle_type' => 'in:motor,mobil,truck',
            'vehicle_seat' => 'numeric|min:1',
            'vehicle_price' => 'numeric|min:0',
            'vehicle_year' => 'date',
            'vehicle_engine' => 'numeric|min:0',
            'vehicle_doors' => 'numeric|min:0',
            'vehicle_transmision' => 'in:manual,automatic',
            'vehicle_merk' => 'string',
            'vehicle_status' => 'in:tersedia,disewa,maintenance,tidak_tersedia,sudah_dibooking',
            'vehicle_image' => 'image|mimes:jpg,jpeg,png|max:2048',
        ]);

        if($request->hasFile('vehicle_image'))
        {
            if($vehicle->vehicle_image)
            {
                Storage::disk('public')->delete($vehicle->vehicle_image);
            }
            $imagePath = $request->file('vehicle_image')->store('vehicles', 'public');
        }else{
            $imagePath = $vehicle->vehicle_image;
        }

        // dd($request->all());

        $vehicle->update([
            'vehicle_name' => $request->vehicle_name,
            'petrol' => $request->petrol,
            'plate' => $request->plate,
            'vehicle_color' => $request->vehicle_color,
            'vehicle_type' => $request->vehicle_type,
            'vehicle_seat' => $request->vehicle_seat,
            'vehicle_price' => $request->vehicle_price,
            'vehicle_year' => $request->vehicle_year,
            'vehicle_engine' => $request->vehicle_engine,
            'vehicle_doors' => $request->vehicle_doors,
            'vehicle_transmision' => $request->vehicle_transmision,
            'vehicle_merk' => $request->vehicle_merk,
            'vehicle_status' => $request->vehicle_status,
            'vehicle_image' => $imagePath,
        ]);

        return redirect()->route('vehicles.index')->with('success', 'Sukses memperbaharui detail kendaraan');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Vehicles $vehicle)
    {
        if($vehicle->vehicle_image)
        {
            Storage::disk('public')->delete($vehicle->vehicle_image);
        }

        $vehicle->delete();

        return redirect()->route('vehicles.index')->with('success', 'Berhasil menghapus data kendaraan');
    }
}
