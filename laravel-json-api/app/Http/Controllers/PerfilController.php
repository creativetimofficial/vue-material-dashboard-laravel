<?php

namespace App\Http\Controllers;

use App\Models\Perfil;
use Illuminate\Http\Request;

class PerfilController extends Controller
{
    public function index()
    {
        $perfiles = Perfil::all();
        return response()->json($perfiles);
    }

    public function store(Request $request)
    {
        $perfil = Perfil::create($request->all());
        return response()->json($perfil, 201);
    }

    public function show($id)
    {
        $perfil = Perfil::findOrFail($id);
        return response()->json($perfil);
    }

    public function update(Request $request, $id)
    {
        $perfil = Perfil::findOrFail($id);
        $perfil->update($request->all());
        return response()->json($perfil);
    }

    public function destroy($id)
    {
        Perfil::destroy($id);
        return response()->json(null, 204);
    }
}
