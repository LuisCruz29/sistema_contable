<?php

namespace App\Http\Controllers;

use App\Models\TblCuenta;
use App\Models\Log;  // Importar el modelo Log
use Illuminate\Http\Request;

class CuentasTController extends Controller
{
    public function obtenerCuentasT()
    {
        $cuentas = TblCuenta::with(['tblRegistroDiarios' => function ($query) {
            $query->select("cuenta_id", 'fecha', 'debe', 'haber');
        }])->get();

        foreach ($cuentas as $cuenta) {
            $totalDebe = $cuenta->tblRegistroDiarios()->sum('debe');
            $totalHaber = $cuenta->tblRegistroDiarios()->sum('haber');
            $cuenta->total = $totalDebe - $totalHaber;
            if ($cuenta->total < 0) {
                $cuenta->total = $totalHaber - $totalDebe;
            }
        }

        // Registrar la acción de obtener las cuentas T
        Log::create([
            'user_id' => session('user') ? session('user')->id : null,
            'fecha_hora' => now(),
            'accion' => 'visualizar cuentas T',
            'modulo' => 'CuentasT',
            'descripcion' => 'El usuario visualizó las cuentas T con sus saldos.',
            'tipoLog' => 'informativo',
        ]);

        return view('report.cuentasT', compact('cuentas'));
    }
}
