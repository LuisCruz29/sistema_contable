<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index.home');
});

Route::get('/login', function () {
    return view('index.login');
});

Route::get('/principal', function () {
    return view('index.principal');
});

Route::get('/balancecomprobacion', function () {
    return view('report.Bal_Comprobacion');
});

Route::get('/balancegeneral', function () {
    return view('report.Bal_General');
});

Route::get('/consultarasientodiario', function () {
    return view('report.C_Asientos_Diario');
});

Route::get('/estadocapital', function () {
    return view('report.Estado_Capital');
});

Route::get('/estadoresultado', function () {
    return view('report.Estado_Resultado');
});

Route::get('/registrodiario', function () {
    return view('report.Registro_Diario');
});

Route::resource('users', UserController::class);