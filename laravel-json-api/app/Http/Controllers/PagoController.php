<?php

namespace App\Http\Controllers;

use App\Models\Pago;
use App\Models\TipoCambio;
use Illuminate\Http\Request;

class PagoController extends Controller
{
    public function index()
    {
        $pagos = Pago::with(['persona', 'pagina', 'tipoCambio'])->get();
        return response()->json($pagos);
    }

    public function store(Request $request)
    {
        $request->validate([
            'persona_id' => 'required',
            'pagina_id' => 'required',
            'monto' => 'required|numeric',
            'horas_trabajadas' => 'required|integer',
            'porcentaje_ganancia' => 'required|numeric',
            'fecha' => 'required|date'  // Fecha del pago para buscar el tipo de cambio
        ]);

        // Buscar el tipo de cambio para la fecha dada
        $tipoCambio = TipoCambio::where('fecha', $request->fecha)->first();

        // Si no existe un tipo de cambio para la fecha dada, no permitir crear el pago
        if (!$tipoCambio) {
            return response()->json(['message' => 'No hay un tipo de cambio registrado para la fecha especificada'], 404);
        }

        $pago = new Pago($request->all());
        $pago->tipo_cambio_id = $tipoCambio->id;
        $pago->save();

        return response()->json($pago, 201);
    }

    public function show(Pago $pago)
    {
        return response()->json($pago->load(['persona', 'pagina', 'tipoCambio']));
    }

    public function update(Request $request, Pago $pago)
    {
        $request->validate([
            'monto' => 'sometimes|numeric',
            'horas_trabajadas' => 'sometimes|integer',
            'porcentaje_ganancia' => 'sometimes|numeric',
            'fecha' => 'sometimes|date'
        ]);

        if ($request->has('fecha')) {
            $tipoCambio = TipoCambio::where('fecha', $request->fecha)->first();

            // Si no existe un tipo de cambio para la nueva fecha, no permitir actualizar el pago
            if (!$tipoCambio) {
                return response()->json(['message' => 'No hay un tipo de cambio registrado para la fecha especificada'], 404);
            }

            $pago->tipo_cambio_id = $tipoCambio->id;
        }

        $pago->update($request->all());

        return response()->json($pago);
    }

    public function destroy(Pago $pago)
    {
        $pago->delete();
        return response()->json(null, 204);
    }
}
