<?php

namespace App\Http\Controllers;

use App\Inscripcion;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class PagosController extends Controller
{
    public function response(Request $request, $idInscripcion)
    {
        Log::info('Response: \n' . json_encode($request->all()));
        $inscripcion = Inscripcion::findOrFail($idInscripcion);

        $paymentClass = 'App\\Payments\\' . $inscripcion->actividad->pais->medio_pago;
        $payment = new $paymentClass($inscripcion);
        $payment->setRequest($request);

        if ($payment->success()) {
            return view('inscripciones.gracias')
                ->with('actividad', $payment->actividad);
        }
        return view('pagos.response')->with('payment', $payment);

    }

    public function confirmation(Request $request)
    {
        Log::info('Confirmación: \n' . json_encode($request->all()));
    }
}
