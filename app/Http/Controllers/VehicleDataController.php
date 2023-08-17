<?php

namespace App\Http\Controllers;

use App\Models\VehicleData;
use Illuminate\Http\Request;

class VehicleDataController extends Controller
{
    public function index()
    {
        $vehicleDataList = VehicleData::all();
        return view('vehicle_data.index', compact('vehicleDataList'));
    }

    public function create()
    {
        return view('vehicle_data.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'placa' => 'required|string',
            'chassi' => 'required|unique:vehicle_data,chassi',
            'renavam' => 'required|unique:vehicle_data,renavam',
            'uf' => 'required|string',
            'marca' => 'required|string',
            'modelo' => 'required|string',
            'km' => 'required|string',
            'nivel_comb' => 'required|string',
           
        ]);

        $existingVehicle = VehicleData::where('placa', $data['placa'])->first();
    
        if ($existingVehicle) {
            return response()->json(['message' => 'Veículo já registrado'], 409);
        }

        $vehicleDataList = VehicleData::create($data);

        return response()->json(['message' => 'Veículo registrado com sucesso!', 'user' => $vehicleDataList], 201);
    }

    public function show($id)
    {
        $vehicleData = VehicleData::findOrFail($id);
        return view('vehicle_data.show', compact('vehicleData'));
    }

}  

