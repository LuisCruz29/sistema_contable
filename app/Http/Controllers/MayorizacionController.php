<?php

namespace App\Http\Controllers;

use App\Models\CuentasT;
use App\Models\TblCuenta;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;

class MayorizacionController extends Controller
{
    public function mayorizarMes(Request $request){
        $fechaInicio = Carbon::parse($request->input('fecha_inicio')); 
        $fechaFin = Carbon::parse($request->input('fecha_fin')); 

        $fechaInicioMesAnterior = $fechaInicio->copy()->subMonth()->startOfMonth()->toDateString(); 
        $fechaFinMesAnterior = $fechaInicio->copy()->subMonth()->endOfMonth()->toDateString(); 
       
        // Verificar si ya existe mayorización para el mes anterior
        $existenRegistrosMes = DB::table('tbl_CuentasT')
        ->whereBetween('fecha', [$fechaInicio, $fechaFin])
        ->exists();
       
        if ($existenRegistrosMes) {
            return Redirect::route('cuentasT.index')->with('error', 'El mes  ya ha sido mayorizado');
        }

        // Obtener los registros de la mayorización del mes anterior
        $mayorizacionMesAnterior = DB::table('tbl_CuentasT')
        ->whereDate('fecha', '>=', $fechaInicioMesAnterior)
        ->whereDate('fecha', '<=', $fechaFinMesAnterior)
        ->get();   
        // Obtener las cuentas y registros del mes actual
        $cuentas = TblCuenta::with(['tblRegistroDiarios' => function ($query) use ($fechaInicio, $fechaFin) {
            if ($fechaInicio && $fechaFin) {
                $query->whereBetween('fecha', [$fechaInicio, $fechaFin]);
            }
            $query->select("cuenta_id", 'fecha', 'debe', 'haber');
        }])->get();
        
        // 
        foreach ($cuentas as $cuenta) {
            // Sumar los valores de debe y haber para el mes actual
            $totalDebeActual = $cuenta->tblRegistroDiarios()->sum('debe');
            $totalHaberActual = $cuenta->tblRegistroDiarios()->sum('haber');

            // Buscar los datos de la mayorización del mes anterior
            $mayorizacionAnterior = $mayorizacionMesAnterior->firstWhere('cuentas_id', $cuenta->id);

            // Si existe un registro de mayorización anterior, combinar con los resultados del mes actual
            if ($mayorizacionAnterior) {
                $totalDebe = $mayorizacionAnterior->debe + $totalDebeActual;
                $totalHaber = $mayorizacionAnterior->haber + $totalHaberActual;
            } else {
                // Si no existe mayorización anterior, solo tomar los datos del mes actual
                $totalDebe = $totalDebeActual;
                $totalHaber = $totalHaberActual;
            }

            // Guardar los totales combinados para la cuenta
            $cuenta->total = $totalDebe - $totalHaber;
            if ($cuenta->total < 0) {
                $cuenta->total = $totalHaber - $totalDebe;
            }

            $cuenta->total_debe = $totalDebe;
            $cuenta->total_haber = $totalHaber;
        }

        // Insertar los registros de mayorización para el mes actual
        foreach ($cuentas as $cuenta) {
            $total=$cuenta->total_debe-$cuenta->total_haber;
            if($total>0){
                $cuenta->total_debe=$total;
                $cuenta->total_haber=0;
            }
            else{
                $total=$total*-1;
                $cuenta->total_debe=0;
                $cuenta->total_haber=$total;
            }
            
            CuentasT::create([
                'cuentas_id' => $cuenta->id,
                'debe' => $cuenta->total_debe,
                'haber' => $cuenta->total_haber,
                'fecha' => $fechaFin,
            ]);
        }

        return Redirect::route('cuentasT.index')->with('success', 'Mayorizacion exitosa');
    }
}
