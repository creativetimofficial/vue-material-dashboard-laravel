<?php

namespace App\Http\Controllers;

use App\Models\TipoCambio;
use Illuminate\Http\Request;

class TipoCambioController extends Controller
{
    public function index()
    {
        $tiposCambio = TipoCambio::all();
        return response()->json($tiposCambio);
    }

    public function store(Request $request)
    {
        $tipoCambio = TipoCambio::create($request->all());
        return response()->json($tipoCambio, 201);
    }

    public function show(TipoCambio $tipoCambio)
    {
        return response()->json($tipoCambio);
    }

    public function update(Request $request, TipoCambio $tipoCambio)
    {
        $tipoCambio->update($request->all());
        return response()->json($tipoCambio);
    }

    public function destroy(TipoCambio $tipoCambio)
    {
        $tipoCambio->delete();
        return response()->json(null, 204);
    }
}
