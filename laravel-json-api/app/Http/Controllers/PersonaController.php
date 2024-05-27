<?php

namespace App\Http\Controllers;

use App\Models\Persona;
use Illuminate\Http\Request;

class PersonaController extends Controller
{
    public function index()
    {
        return Persona::with('perfiles')->get();
    }

    public function show($id)
    {
        return Persona::with('perfiles')->findOrFail($id);
    }

    public function store(Request $request)
    {
        $persona = Persona::create($request->all());
        if ($request->has('perfiles')) {
            $persona->perfiles()->sync($request->input('perfiles'));
        }
        return $persona;
    }

    public function update(Request $request, $id)
    {
        $persona = Persona::findOrFail($id);
        $persona->update($request->all());
        if ($request->has('perfiles')) {
            $persona->perfiles()->sync($request->input('perfiles'));
        }
        return $persona;
    }

    public function destroy($id)
    {
        $persona = Persona::findOrFail($id);
        $persona->perfiles()->detach();
        $persona->delete();
        return response()->noContent();
    }
}
