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
        $data = $request->all();

        if ($request->hasFile('profile_image')) {
            $path = $request->file('profile_image')->store('profile_images', 'public');
            $data['profile_image'] = $path;
        }

        $persona = Persona::create($data);

        if ($request->has('perfiles')) {
            $persona->perfiles()->sync($request->input('perfiles'));
        }

        return response()->json($persona, 201);
    }

    public function update(Request $request, $id)
    {
        $persona = Persona::findOrFail($id);
        $data = $request->all();

        if ($request->hasFile('profile_image')) {
            // Eliminar la imagen anterior si existe
            if ($persona->profile_image) {
                Storage::disk('public')->delete($persona->profile_image);
            }
            $path = $request->file('profile_image')->store('profile_images', 'public');
            $data['profile_image'] = $path;
        }

        $persona->update($data);

        if ($request->has('perfiles')) {
            $persona->perfiles()->sync($request->input('perfiles'));
        }

        return response()->json($persona, 200);
    }

    public function destroy($id)
    {
        $persona = Persona::findOrFail($id);
        $persona->perfiles()->detach();
        $persona->delete();
        return response()->noContent();
    }
}
