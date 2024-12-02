<?php

namespace App\Http\Controllers;

use App\Models\TblCuenta;
use App\Models\Log;  // Importar el modelo Log
use Illuminate\Http\Request;
use Carbon\Carbon;


class CuentasTController extends Controller
{
    public function obtenerCuentasT()
    {
        
        $fechaInicio = Carbon::now()->startOfMonth()->toDateString(); 
        $fechaFin = Carbon::now()->endOfMonth()->toDateString(); 

        $fechaInicioAnterior = Carbon::now()->subMonth()->startOfMonth()->toDateString();
        $fechaFinAnterior = Carbon::now()->subMonth()->endOfMonth()->toDateString();

        $cuentas = TblCuenta::with([
            'tblRegistroDiarios' => function ($query) use ($fechaInicio, $fechaFin) {
            // Filtrar los registros por el rango de fechas
            $query->whereBetween('fecha', [$fechaInicio, $fechaFin])
                    ->select('cuenta_id', 'fecha', 'debe', 'haber');
            },
            'tblCuentasT' => function ($query) use ($fechaInicioAnterior, $fechaFinAnterior) {
            // Filtrar los registros de CuentasT por el rango de fechas del mes anterior
            $query->whereBetween('fecha', [$fechaInicioAnterior, $fechaFinAnterior])
                ->select('cuentas_id', 'fecha', 'debe', 'haber');
        } ])->get();

       
        // Procesar las cuentas y calcular los totales
        foreach ($cuentas as $cuenta) {
            $totalDebe = $cuenta->tblRegistroDiarios()->sum('debe');
            $totalHaber = $cuenta->tblRegistroDiarios()->sum('haber');
            
            // Total de los registros de CuentasT del mes anterior
            $totalDebeT = $cuenta->tblCuentasT()->sum('debe');
            $totalHaberT = $cuenta->tblCuentasT()->sum('haber');
            
            // Calcular el total general de la cuenta
            $totalDebeTotal = $totalDebe + $totalDebeT;
            $totalHaberTotal = $totalHaber + $totalHaberT;

            // Asignar el total a la cuenta
            $cuenta->total = $totalDebeTotal - $totalHaberTotal;
            if ($cuenta->total < 0) {
                $cuenta->total = $totalHaberTotal - $totalDebeTotal;
            }

            // Calcular los totales de cada columna
            $cuenta->total_debe = $totalDebeTotal;
            $cuenta->total_haber = $totalHaberTotal;
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
    
        // Pasar las cuentas a la vista
        return view('report.cuentasT', compact('cuentas'));
        
        
    }

    public function obtenerCuentasTXfecha( Request $request)
    {
       
        $fechaInicio = Carbon::parse($request->input('fecha_inicio')); 
        $fechaFin = Carbon::parse($request->input('fecha_fin')); 
        
       
        $fechaInicioAnterior = $fechaInicio->copy()->subMonth()->startOfMonth()->toDateString(); 
        $fechaFinAnterior = $fechaFin->copy()->subMonth()->endOfMonth()->toDateString(); 
        
        $cuentas = TblCuenta::with([
            'tblRegistroDiarios' => function ($query) use ($fechaInicio, $fechaFin) {
            // Filtrar los registros por el rango de fechas
            $query->whereBetween('fecha', [$fechaInicio, $fechaFin])
                    ->select('cuenta_id', 'fecha', 'debe', 'haber');
            },
            'tblCuentasT' => function ($query) use ($fechaInicioAnterior, $fechaFinAnterior) {
            // Filtrar los registros de CuentasT por el rango de fechas del mes anterior
            $query->whereBetween('fecha', [$fechaInicioAnterior, $fechaFinAnterior])
                ->select('cuentas_id', 'fecha', 'debe', 'haber');
        } ])->get();

      
        foreach ($cuentas as $cuenta) {

            $totalDebe = $cuenta->tblRegistroDiarios()->sum('debe');
            $totalHaber = $cuenta->tblRegistroDiarios()->sum('haber');
            
            // Total de los registros de CuentasT del mes anterior
            $totalDebeT = $cuenta->tblCuentasT()->sum('debe');
            $totalHaberT = $cuenta->tblCuentasT()->sum('haber');
            
            // Calcular el total general de la cuenta
            $totalDebeTotal = $totalDebe + $totalDebeT;
            $totalHaberTotal = $totalHaber + $totalHaberT;

            // Asignar el total a la cuenta
            $cuenta->total = $totalDebeTotal - $totalHaberTotal;
            if ($cuenta->total < 0) {
                $cuenta->total = $totalHaberTotal - $totalDebeTotal;
            }

            // Calcular los totales de cada columna
            $cuenta->total_debe = $totalDebeTotal;
            $cuenta->total_haber = $totalHaberTotal;
        }

     
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
