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
    
        // Traer las cuentas de ingresos (nombreCuenta específico)
        $ingresos = TblCuenta::where('nombreCuenta', 'Ingresos por Servicios')->get();
        $totalIngresos = 0;
        $ingresosData = [];
    
        foreach ($ingresos as $ingreso) {
            // Obtener el nombre de la cuenta y los resultados de tblCuentasT filtrados por fecha
            $totalDebe = $ingreso->tblCuentasT()->whereBetween('fecha', [$fechaInicio, $fechaFin])->sum('debe');
            $totalHaber = $ingreso->tblCuentasT()->whereBetween('fecha', [$fechaInicio, $fechaFin])->sum('haber');
    
            // Calcular el total de ingresos sumando los valores de 'haber'
            $totalIngresos += $totalHaber;
    
            // Guardar los resultados para cada cuenta de ingresos
            $ingresosData[] = [
                'nombreCuenta' => $ingreso->nombreCuenta,
                'totalDebe' => $totalDebe,
                'totalHaber' => $totalHaber
            ];
        }
    
        // Traer las cuentas de gastos (tipo 'Gastos')
        $gastos = TblCuenta::where('tipo', 'Gastos')->get();
        $totalGastos = 0;
        $gastosData = [];
    
        foreach ($gastos as $gasto) {
            // Obtener los resultados de tblCuentasT filtrados por fecha para cada cuenta de gastos
            $totalDebeGasto = $gasto->tblCuentasT()->whereBetween('fecha', [$fechaInicio, $fechaFin])->sum('debe');
            $totalHaberGasto = $gasto->tblCuentasT()->whereBetween('fecha', [$fechaInicio, $fechaFin])->sum('haber');
    
            // Calcular el total de gastos sumando los valores de 'debe' y 'haber'
            $totalGastos += $totalDebeGasto - $totalHaberGasto;
    
            // Guardar los resultados para cada cuenta de gasto
            $gastosData[] = [
                'nombreCuenta' => $gasto->nombreCuenta,
                'totalDebe' => $totalDebeGasto,
                'totalHaber' => $totalHaberGasto
            ];
        }
    
        // Calcular la utilidad total
        $utilidadTotal = $totalIngresos - $totalGastos;
    
        // Pasar los resultados a la vista
        return view('report.Estado_Resultado', compact('ingresosData', 'totalIngresos', 'gastosData', 'totalGastos', 'utilidadTotal'));
    }
}

