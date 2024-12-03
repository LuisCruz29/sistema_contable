<?php

namespace App\Http\Controllers;

use App\Models\TblCuenta;
use App\Models\CuentasT;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class BalanceGeneralController extends Controller
{
    public function index()
    {
        // Definir las fechas de inicio y fin del mes actual
        $fechaInicio = Carbon   ::now()->startOfMonth()->toDateString();
        $fechaFin = Carbon::now()->endOfMonth()->toDateString();

        // Obtener los registros de activos, pasivos y capital
        $activos = TblCuenta::where('tipo', 'Activo')->get();
        $pasivos = TblCuenta::where('tipo', 'Pasivo')->get();
        $capital = TblCuenta::where('tipo', 'Capital')->get();

        // Calcular los saldos pasándoles las fechas
        $activosResultado = $this->calcularSaldoActivos($activos, $fechaInicio, $fechaFin);
        $activosSaldo = $activosResultado['saldos'];
        $totalActivos = $activosResultado['totalActivo'];

        $pasivosSaldo = $this->calcularSaldoPasivos($pasivos, $fechaInicio, $fechaFin);
        $totalPasivos = array_sum(array_column($pasivosSaldo, 'saldo'));

        $capitalSaldo = $this->calcularSaldoCapital($capital, $fechaInicio, $fechaFin);
        $totalCapital = array_sum(array_column($capitalSaldo, 'saldo'));

        $totalPasivoCapital = $totalPasivos + $totalCapital;

        return view('report.Bal_General', compact('activosSaldo', 'totalActivos', 'pasivosSaldo', 'totalPasivos', 'capitalSaldo', 'totalCapital', 'totalPasivoCapital'));
    }

    private function calcularSaldoActivos($cuentas, $fechaInicio, $fechaFin)
    {
        $saldos = [];
        $totalActivo = 0;
    
        foreach ($cuentas as $cuenta) {
            // Filtrar por fecha
            $saldo = CuentasT::where('cuentas_id', $cuenta->id)
                ->whereBetween('fecha', [$fechaInicio, $fechaFin]) // Filtro por fecha
                ->select(DB::raw('SUM(debe) as total_debe'), DB::raw('SUM(haber) as total_haber'))
                ->first();
    
            $saldoCalculado = $saldo ? $saldo->total_debe - $saldo->total_haber : 0;
    
            if ($cuenta->nombreCuenta === 'Edificio') {
                $valorEdificio = $saldoCalculado;
    
                $depreciacion = TblCuenta::where('nombreCuenta', 'Depreciacion acumulada:edificio')->first();
    
                if ($depreciacion) {
                    // Filtrar por fecha en la depreciación
                    $saldoDepreciacion = CuentasT::where('cuentas_id', $depreciacion->id)
                        ->whereBetween('fecha', [$fechaInicio, $fechaFin]) // Filtro por fecha
                        ->select(DB::raw('SUM(debe) as total_debe'), DB::raw('SUM(haber) as total_haber'))
                        ->first();
    
                    $depreciacionCalculada = $saldoDepreciacion ? $saldoDepreciacion->total_haber - $saldoDepreciacion->total_debe : 0;
                } else {
                    $depreciacionCalculada = 0;
                }
    
                $valorNetoEdificio = $valorEdificio - $depreciacionCalculada;
    
                $saldos[$cuenta->id] = [
                    'nombreCuenta' => $cuenta->nombreCuenta,
                    'descripcion' => $cuenta->descripcion,
                    'saldo' => $valorEdificio,
                ];
    
                $saldos['depreciacion_acumulada'] = [
                    'nombreCuenta' => 'Depreciacion acumulada: Edificio',
                    'descripcion' => 'Depreciación acumulada del edificio',
                    'saldo' => -$depreciacionCalculada,
                ];
    
                $saldos['valor_neto_edificio'] = [
                    'nombreCuenta' => 'Valor neto del Edificio',
                    'descripcion' => 'Valor del edificio menos depreciación',
                    'saldo' => $valorNetoEdificio,
                ];
    
                $totalActivo += $valorNetoEdificio;
            } else {
                $saldos[$cuenta->id] = [
                    'nombreCuenta' => $cuenta->nombreCuenta,
                    'descripcion' => $cuenta->descripcion,
                    'saldo' => $saldoCalculado,
                ];
    
                $totalActivo += $saldoCalculado;
            }
        }
    
        return ['saldos' => $saldos, 'totalActivo' => $totalActivo];
    }
    
    private function calcularSaldoPasivos($cuentas, $fechaInicio, $fechaFin)
    {
        $saldos = [];

        foreach ($cuentas as $cuenta) {
            // Filtrar por fecha
            $saldo = CuentasT::where('cuentas_id', $cuenta->id)
                ->whereBetween('fecha', [$fechaInicio, $fechaFin]) // Filtro por fecha
                ->select(DB::raw('SUM(debe) as total_debe'), DB::raw('SUM(haber) as total_haber'))
                ->first();

            $saldoCalculado = $saldo ? $saldo->total_haber - $saldo->total_debe : 0;

            $saldos[$cuenta->id] = [
                'nombreCuenta' => $cuenta->nombreCuenta,
                'descripcion' => $cuenta->descripcion,
                'saldo' => $saldoCalculado,
            ];
        }

        return $saldos;
    }


    private function calcularSaldoCapital($cuentas, $fechaInicio, $fechaFin)
    {
        $saldos = [];

        foreach ($cuentas as $cuenta) {
            // Filtrar por fecha
            $saldo = CuentasT::where('cuentas_id', $cuenta->id)
                ->whereBetween('fecha', [$fechaInicio, $fechaFin]) // Filtro por fecha
                ->select(DB::raw('SUM(debe) as total_debe'), DB::raw('SUM(haber) as total_haber'))
                ->first();
            
            $saldoCalculado = $saldo ? $saldo->total_haber - $saldo->total_debe : 0;

            if($saldoCalculado<0){
                $saldoCalculado=$saldoCalculado*-1;
            }
            
            $saldos[$cuenta->id] = [
                'nombreCuenta' => $cuenta->nombreCuenta,
                'descripcion' => $cuenta->descripcion,
                'saldo' => $saldoCalculado,
            ];
        }

        return $saldos;
    }


}
