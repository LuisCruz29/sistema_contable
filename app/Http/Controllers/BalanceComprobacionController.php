<?php

namespace App\Http\Controllers;

use App\Models\TblCuenta;
use Carbon\Carbon;
use Illuminate\Http\Request;

class BalanceComprobacionController extends Controller
{
    public function index(){
        $fechaInicio = Carbon::now()->startOfMonth()->toDateString(); 
        $fechaFin = Carbon::now()->endOfMonth()->toDateString(); 
        $cuentas = TblCuenta::all(); 

        $balanceData = [];

        foreach ($cuentas as $cuenta) {
            $totalDebe = $cuenta->tblCuentasT()
                        ->whereBetween('fecha', [$fechaInicio, $fechaFin]) // Ajusta 'fecha' con el nombre correcto del campo
                        ->sum('debe');

            $totalHaber = $cuenta->tblCuentasT()
                         ->whereBetween('fecha', [$fechaInicio, $fechaFin]) // Ajusta 'fecha' con el nombre correcto del campo
                         ->sum('haber');

            $balanceData[] = [
                'nombreCuenta' => $cuenta->nombreCuenta,
                'totalDebe' => $totalDebe,
                'totalHaber' => $totalHaber,
            ];
        }
            return view('report.Bal_Comprobacion', compact('balanceData'));
    }
}