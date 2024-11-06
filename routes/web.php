<?php

use App\Http\Controllers\BalanceComprobacionController;
use App\Http\Controllers\CuentasTController;
use App\Http\Controllers\LogController;
use App\Http\Controllers\RegistroDiarioController;
use App\Http\Controllers\TblCuentaController;
use App\Http\Controllers\TblLogController;
use App\Http\Controllers\TblPermisoController;
use App\Http\Controllers\TblRegistroDiarioController;
use App\Http\Controllers\UserController;
use App\Http\Middleware\verificarUsuario;
use App\Models\BalanceComprobacion;
use App\Models\TblLog;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index.home');
})->name('inicio');

Route::get('/login', [LogController::class, 'verLogin'])->name('login');
Route::post('/login', [LogController::class, 'login'])->name('verLogin');
Route::middleware('verificarUsuario')->group(function (){

    Route::get('/logout', [LogController::class, 'logout'])->name('logout');
    
    
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

    Route::get('/cuentasT',[CuentasTController::class,'obtenerCuentasT'])->name('cuentasT.index');
        
    Route::resource('users', UserController::class);
    Route::resource('tbl-cuentas', TblCuentaController::class);
    Route::resource('tbl-permisos', TblPermisoController::class);
    Route::resource('tbl-logs', TblLogController::class);
    Route::delete('/tbl-logs/delete', [TblLogController::class, 'deleteTodo'])->name('tbl-logs.deleteTodo');
    Route::resource('tbl-registro-diario', TblRegistroDiarioController::class);
    Route::get('/buscarRegistro', [TblRegistroDiarioController::class, 'filtrar'])->name('filtar.por.codigo');
});