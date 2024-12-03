<?php

namespace App\Http\Controllers;

use App\Models\TblCuenta;
use App\Models\CuentasT;
use Illuminate\Support\Facades\DB;

class BalanceGeneralController extends Controller
{
        public function index()
    {
        $activos = TblCuenta::where('tipo', 'Activo')->get();
        $pasivos = TblCuenta::where('tipo', 'Pasivo')->get();
        $capital = TblCuenta::where('tipo', 'Capital')->get();

        $activosResultado = $this->calcularSaldoActivos($activos);
        $activosSaldo = $activosResultado['saldos'];
        $totalActivos = $activosResultado['totalActivo'];

        $pasivosSaldo = $this->calcularSaldoPasivos($pasivos);
        $totalPasivos = array_sum(array_column($pasivosSaldo, 'saldo'));

        $capitalSaldo = $this->calcularSaldoCapital($capital);
        $totalCapital = array_sum(array_column($capitalSaldo, 'saldo'));

        $totalPasivoCapital = $totalPasivos + $totalCapital;

        return view('report.Bal_General', compact('activosSaldo', 'totalActivos', 'pasivosSaldo', 'totalPasivos', 'capitalSaldo', 'totalCapital', 'totalPasivoCapital'));
    }


    private function calcularSaldoActivos($cuentas)
    {
        $saldos = [];
        $totalActivo = 0; 

        foreach ($cuentas as $cuenta) {
            $saldo = CuentasT::where('cuentas_id', $cuenta->id)
                ->select(DB::raw('SUM(debe) as total_debe'), DB::raw('SUM(haber) as total_haber'))
                ->first();

            $saldoCalculado = $saldo ? $saldo->total_debe - $saldo->total_haber : 0;

            if ($cuenta->nombreCuenta === 'Edificio') {
                $valorEdificio = $saldoCalculado;

                $depreciacion = TblCuenta::where('nombreCuenta', 'Depreciacion acumulada:edificio')->first();

                if ($depreciacion) {
                    $saldoDepreciacion = CuentasT::where('cuentas_id', $depreciacion->id)
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


    private function calcularSaldoPasivos($cuentas)
    {
        $saldos = [];
        foreach ($cuentas as $cuenta) {
            $saldo = CuentasT::where('cuentas_id', $cuenta->id)
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

    private function calcularSaldoCapital($cuentas)
    {
        $saldos = [];
        foreach ($cuentas as $cuenta) {
            $saldo = CuentasT::where('cuentas_id', $cuenta->id)
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

}
