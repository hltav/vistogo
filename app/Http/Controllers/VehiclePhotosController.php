<?php

namespace App\Http\Controllers;

use App\Models\VehiclePhotos;
use App\Models\VehicleData;
use Illuminate\Http\Request;

class VehiclePhotosController extends Controller
{
    public function create($vehicleDataId)
    {
        $vehicleData = VehicleData::findOrFail($vehicleDataId);
        return view('vehicle_photos.create', compact('vehicleData'));
    }

    public function store(Request $request, $vehicleDataId)
    {
        $data = $request->validate([
            'placa' => 'required|image',
            'dianteira' => 'required|image',
            'traseira' => 'required|image',
            'hodometro' => 'required|image',
            'foto_banco_dianteiro' => 'required|image',
        ]);

        $data['vehicledata_id'] = $vehicleDataId;

        foreach (['dianteira', 'traseira', 'hodometro', 'foto_banco_dianteiro'] as $imageField) {
            if ($request->hasFile($imageField)) {
                $imagePath = $request->file($imageField)->store('vehicle_photos', 'public');
                $data[$imageField] = $imagePath;
            }
        }

        VehiclePhotos::create($data);

        return redirect()->route('vehicle_data.show', $vehicleDataId);
    }
    
}

