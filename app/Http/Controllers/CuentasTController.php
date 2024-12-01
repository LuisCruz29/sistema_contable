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

    
        $cuentas = TblCuenta::with(['tblRegistroDiarios' => function ($query) use ($fechaInicio, $fechaFin) {
            // Filtrar los registros por el rango de fechas
            $query->whereBetween('fecha', [$fechaInicio, $fechaFin])
                    ->select('cuenta_id', 'fecha', 'debe', 'haber');
        }])->get();
    
        // Procesar las cuentas y calcular los totales
        foreach ($cuentas as $cuenta) {
            $totalDebe = $cuenta->tblRegistroDiarios()->sum('debe');
            $totalHaber = $cuenta->tblRegistroDiarios()->sum('haber');
    
            // Asignar el total a la cuenta
            $cuenta->total = $totalDebe - $totalHaber;
            if ($cuenta->total < 0) {
                $cuenta->total = $totalHaber - $totalDebe;
            }
    
            // Calcular los totales de cada columna
            $cuenta->total_debe = $totalDebe;
            $cuenta->total_haber = $totalHaber;
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
       
        $fechaInicio = $request->input('fecha_inicio');
        $fechaFin = $request->input('fecha_fin');

        
        $cuentas = TblCuenta::with(['tblRegistroDiarios' => function ($query) use ($fechaInicio, $fechaFin) {
            
            if ($fechaInicio && $fechaFin) {
                $query->whereBetween('fecha', [$fechaInicio, $fechaFin]);
            }
           
            $query->select("cuenta_id", 'fecha', 'debe', 'haber');
        }])->get();

      
        foreach ($cuentas as $cuenta) {

            // Aplicar filtro de fechas directamente en el cálculo de las sumas
            $totalDebe = $cuenta->tblRegistroDiarios()->whereBetween('fecha', [$fechaInicio, $fechaFin])->sum('debe');
            $totalHaber = $cuenta->tblRegistroDiarios()->whereBetween('fecha', [$fechaInicio, $fechaFin])->sum('haber');
    
            // Asignar el total a la cuenta
            $cuenta->total = $totalDebe - $totalHaber;
            if ($cuenta->total < 0) {
                $cuenta->total = $totalHaber - $totalDebe;
            }
    
            // Calcular los totales de cada columna
            $cuenta->total_debe = $totalDebe;
            $cuenta->total_haber = $totalHaber;
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
