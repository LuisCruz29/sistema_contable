<?php

namespace App\Http\Controllers;

use App\Models\TblCuenta;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class EstadoCapitalController extends Controller
{
    public function index()
    {
        // Definir las fechas de inicio y fin del mes actual
        $fechaInicio = Carbon::now()->startOfMonth()->toDateString(); 
        $fechaFin = Carbon::now()->endOfMonth()->toDateString(); 

        // Obtener el capital inicial filtrado por fecha
        $capitalInicial = DB::table('tbl_cuentas')
            ->join('tbl_CuentasT', 'tbl_cuentas.id', '=', 'tbl_CuentasT.cuentas_id')
            ->where('tbl_cuentas.tipo', 'Capital')
            ->whereBetween('tbl_CuentasT.fecha', [$fechaInicio, $fechaFin])  // Filtro por fecha
            ->sum('tbl_CuentasT.haber');

        // Obtener los ingresos filtrados por fecha
        $ingresos = DB::table('tbl_cuentas')
            ->join('tbl_CuentasT', 'tbl_cuentas.id', '=', 'tbl_CuentasT.cuentas_id')
            ->where('tbl_cuentas.nombreCuenta', 'Ingresos por Servicios') 
            ->whereBetween('tbl_CuentasT.fecha', [$fechaInicio, $fechaFin])  // Filtro por fecha
            ->sum('tbl_CuentasT.haber');

        // Obtener los gastos filtrados por fecha
        $gastos = DB::table('tbl_cuentas')
            ->join('tbl_CuentasT', 'tbl_cuentas.id', '=', 'tbl_CuentasT.cuentas_id')
            ->where('tbl_cuentas.tipo', 'Gastos')
            ->whereBetween('tbl_CuentasT.fecha', [$fechaInicio, $fechaFin])  // Filtro por fecha
            ->sum('tbl_CuentasT.debe');

        // Calcular la utilidad neta
        $utilidadNeta = $ingresos - $gastos;

        // Obtener los retiros filtrados por fecha
        $retiros = DB::table('tbl_cuentas')
            ->join('tbl_CuentasT', 'tbl_cuentas.id', '=', 'tbl_CuentasT.cuentas_id')
            ->where('tbl_cuentas.tipo', 'Retiro')
            ->whereBetween('tbl_CuentasT.fecha', [$fechaInicio, $fechaFin])  // Filtro por fecha
            ->sum('tbl_CuentasT.debe');

        // Calcular el capital total
        $capitalTotal = $capitalInicial + $utilidadNeta - $retiros;

        // Obtener los nombres de las cuentas de capital
        $nombreCuentaCapital = DB::table('tbl_cuentas')
            ->where('tbl_cuentas.tipo', 'Capital')
            ->pluck('nombreCuenta');

        // Obtener los nombres de las cuentas de retiro
        $nombreCuentaRetiro = DB::table('tbl_cuentas')
            ->where('tbl_cuentas.tipo', 'Retiro')
            ->pluck('nombreCuenta');

        // Pasar los resultados a la vista
        return view('report.Estado_Capital', compact('capitalInicial', 'utilidadNeta', 'retiros', 'capitalTotal', 'nombreCuentaCapital', 'nombreCuentaRetiro'));
    }

}
