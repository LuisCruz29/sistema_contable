<?php

namespace App\Http\Controllers;

use App\Models\TblCuenta;
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
        }

        return view('report.cuentasT', compact('cuentas'));
    }
}
