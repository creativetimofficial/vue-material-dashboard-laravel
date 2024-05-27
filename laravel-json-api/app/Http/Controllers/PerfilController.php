<?php

namespace App\Http\Controllers;

use App\Models\Perfil;
use Illuminate\Http\Request;

class PerfilController extends Controller
{
    public function index()
    {
        return Perfil::with('personas')->get();
    }

    public function show($id)
    {
        return Perfil::with('personas')->findOrFail($id);
    }

    public function store(Request $request)
    {
        $perfil = Perfil::create($request->all());
        return $perfil;
    }

    public function update(Request $request, $id)
    {
        $perfil = Perfil::findOrFail($id);
        $perfil->update($request->all());
        return $perfil;
    }

    public function destroy($id)
    {
        $perfil = Perfil::findOrFail($id);
        $perfil->delete();
        return response()->noContent();
    }
}
