<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BalanceComprobacionController extends Controller
{
    public function index(){
        return view('report.Bal_Comprobacion');
    }
}
