<?php

namespace App\Http\Controllers;

use App\Models\Conductor;
use Illuminate\Http\Request;

class ConductorController extends Controller
{
    public function index($id = null)
    {

        if ($id) {
            $conductor = Conductor::find($id);
            if (!$conductor) {
                return response()->json(['message' => 'Condutor não encontrado'], 404);
            }
            return response()->json($conductor);
        }

        $conductors = Conductor::all();
        return response()->json($conductors);
    }


    public function store(Request $request)
    {

        $validated = $request->validate([
            'name' => 'required|string',
            'CPF' => 'required|unique:conductor,cpf',
            'RG' => 'required|unique:conductor,rg',
            'phone' => 'required|unique:conductor,phone',
            'direcction' => 'required',
            'CNH' => 'required|unique:conductor,cnh',
        ]);

        $existingConductor = Conductor::where('cpf', $validated['CPF'])->first();
        if ($existingConductor) {
            return response()->json(['message' => 'Condutor com este CPF já está registrado!', 'user' => $existingConductor], 409);
        }


        $conductor = Conductor::create($validated);

        return response()->json(['message' => 'Condutor registrado com sucesso!', 'user' => $conductor], 201);
    }

    public function show($id)
    {
        $conductor = Conductor::findOrFail($id);
        return view('conductor.show', compact('conductor'));
    }
}
