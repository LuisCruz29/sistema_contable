<?php

namespace App\Http\Controllers;

use App\Models\RegistroDiario;

class RegistroDiarioController extends Controller
{

    public function index(){
        return view('report.C_Asientos_Diario');
    }

    public function insertar(){
        return view('report.Registro_Diario');
    }

    public function getRegistroDiario(){
        
        $listado= RegistroDiario::orderBy('codigoTransaccion')->get();
    }


}
