<?php

use App\Http\Controllers\BalanceComprobacionController;
use App\Http\Controllers\RegistroDiarioController;
use App\Http\Controllers\TblCuentaController;
use App\Http\Controllers\TblLogController;
use App\Http\Controllers\TblPermisoController;
use App\Http\Controllers\UserController;
use App\Models\BalanceComprobacion;
use App\Models\TblLog;
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

Route::get('/balancegeneral', function () {
    return view('report.Bal_General');
});

Route::get('/estadocapital', function () {
    return view('report.Estado_Capital');
});

Route::get('/estadoresultado', function () {
    return view('report.Estado_Resultado');
});

Route::controller(BalanceComprobacionController::class)->group(function (){
    Route::get('/balancecomprobacion','index')->name('bal_comprobacion.index');
});


Route::controller(RegistroDiarioController::class)->group(function (){
    Route::get('/consultar_asiento_diario','index')->name('asiento_diario.index');
    Route::get('/registrar_asiento_diario','insertar')->name('asiento_diario.insertar');
});


Route::resource('users', UserController::class);
Route::resource('tbl-cuentas', TblCuentaController::class);
Route::resource('tbl-permisos', TblPermisoController::class);
Route::resource('tbl-logs', TblLogController::class);
Route::delete('/tbl-logs/delete', [TblLogController::class, 'deleteTodo'])->name('tbl-logs.deleteTodo');
