<?php

namespace App\Http\Controllers;

use App\Models\RegistroDiario;

class RegistroDiarioController extends Controller
{
    public function getRegistroDiario(){
        
        $listado= RegistroDiario::orderBy('codigoTransaccion')->get();
    }
}
