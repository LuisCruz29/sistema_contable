<?php

namespace App\Http\Controllers;

use App\Models\TblCuenta;
use Illuminate\Http\Request;

class BalanceComprobacionController extends Controller
{
    public function index(){

    $cuentas = TblCuenta::all(); 

    $balanceData = [];

    foreach ($cuentas as $cuenta) {
        $totalDebe = $cuenta->tblCuentasT()->sum('debe');
        $totalHaber = $cuenta->tblCuentasT()->sum('haber');
        $balanceData[] = [
            'nombreCuenta' => $cuenta->nombreCuenta,
            'totalDebe' => $totalDebe,
            'totalHaber' => $totalHaber,
        ];
    }
        return view('report.Bal_Comprobacion', compact('balanceData'));
    }
}