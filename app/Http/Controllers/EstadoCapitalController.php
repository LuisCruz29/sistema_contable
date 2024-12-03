<?php

namespace App\Http\Controllers;

use App\Models\TblCuenta;
use Illuminate\Support\Facades\DB;

class EstadoCapitalController extends Controller
{
    public function index()
    {
        $capitalInicial = DB::table('tbl_cuentas')
            ->join('tbl_CuentasT', 'tbl_cuentas.id', '=', 'tbl_CuentasT.cuentas_id')
            ->where('tbl_cuentas.tipo', 'Capital')
            ->sum('tbl_CuentasT.haber');

        $ingresos = DB::table('tbl_cuentas')
            ->join('tbl_CuentasT', 'tbl_cuentas.id', '=', 'tbl_CuentasT.cuentas_id')
            ->where('tbl_cuentas.nombreCuenta', 'Ingresos por Servicios') 
            ->sum('tbl_CuentasT.haber');

        $gastos = DB::table('tbl_cuentas')
            ->join('tbl_CuentasT', 'tbl_cuentas.id', '=', 'tbl_CuentasT.cuentas_id')
            ->where('tbl_cuentas.tipo', 'Gastos')
            ->sum('tbl_CuentasT.debe');

        $utilidadNeta = $ingresos - $gastos;

        $retiros = DB::table('tbl_cuentas')
            ->join('tbl_CuentasT', 'tbl_cuentas.id', '=', 'tbl_CuentasT.cuentas_id')
            ->where('tbl_cuentas.tipo', 'Retiro')
            ->sum('tbl_CuentasT.debe');

        $capitalTotal = $capitalInicial + $utilidadNeta - $retiros;

        $nombreCuentaCapital = DB::table('tbl_cuentas')
            ->where('tbl_cuentas.tipo', 'Capital')
            ->pluck('nombreCuenta');

        $nombreCuentaRetiro = DB::table('tbl_cuentas')
            ->where('tbl_cuentas.tipo', 'Retiro')
            ->pluck('nombreCuenta');

        return view('report.Estado_Capital', compact('capitalInicial', 'utilidadNeta', 'retiros', 'capitalTotal', 'nombreCuentaCapital', 'nombreCuentaRetiro'));
    }

}
