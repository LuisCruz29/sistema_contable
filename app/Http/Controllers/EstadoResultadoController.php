<?php

namespace App\Http\Controllers;

use App\Models\TblCuenta;
use Carbon\Carbon;
use Illuminate\Http\Request;

class EstadoResultadoController extends Controller
{
    public function mostrarEstadoResultados()
    {
        $fechaInicio = Carbon::now()->startOfMonth()->toDateString(); 
        $fechaFin = Carbon::now()->endOfMonth()->toDateString(); 
        $ingresos = TblCuenta::where('nombreCuenta', 'Ingresos por Servicios')->get();
        $totalIngresos = 0;

        foreach ($ingresos as $ingreso) {
            $totalIngresos += $ingreso->tblCuentasT()->whereBetween('fecha', [$fechaInicio, $fechaFin])->sum('haber');
        }
        
        $gastos = TblCuenta::where('tipo', 'Gastos')->get();
        $totalGastos = 0;

        foreach ($gastos as $gasto) {
            $totalGastos += $gasto->tblCuentasT()->whereBetween('fecha', [$fechaInicio, $fechaFin])->sum('debe') - $gasto->tblCuentasT()->whereBetween('fecha', [$fechaInicio, $fechaFin])->sum('haber');
        }

        $utilidadTotal = $totalIngresos - $totalGastos;

        return view('report.Estado_Resultado', compact('ingresos', 'totalIngresos', 'gastos', 'totalGastos', 'utilidadTotal'));
    }
}



