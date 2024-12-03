<?php

namespace App\Http\Controllers;

use App\Models\TblCuenta;
use Illuminate\Http\Request;

class EstadoResultadoController extends Controller
{
    public function mostrarEstadoResultados()
    {
        $ingresos = TblCuenta::where('nombreCuenta', 'Ingresos por Servicios')->get();
        $totalIngresos = 0;

        foreach ($ingresos as $ingreso) {
            $totalIngresos += $ingreso->tblCuentasT()->sum('haber');
        }

        $gastos = TblCuenta::where('tipo', 'Gastos')->get();
        $totalGastos = 0;

        foreach ($gastos as $gasto) {
            $totalGastos += $gasto->tblCuentasT()->sum('debe') - $gasto->tblCuentasT()->sum('haber');
        }

        $utilidadTotal = $totalIngresos - $totalGastos;

        return view('report.Estado_Resultado', compact('ingresos', 'totalIngresos', 'gastos', 'totalGastos', 'utilidadTotal'));
    }
}



