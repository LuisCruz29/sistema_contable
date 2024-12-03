<?php

use App\Http\Controllers\BalanceComprobacionController;
use App\Http\Controllers\BalanceGeneralController;
use App\Http\Controllers\CuentasTController;
use App\Http\Controllers\EstadoCapitalController;
use App\Http\Controllers\EstadoResultadoController;
use App\Http\Controllers\EstadoResultadosController;
use App\Http\Controllers\LogController;
use App\Http\Controllers\MayorizacionController;
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

    
    Route::get('/estadocapital', function () {
        return view('report.Estado_Capital');
    });

    
    Route::controller(BalanceComprobacionController::class)->group(function (){
        Route::get('/balancecomprobacion','index')->name('bal_comprobacion.index');
    });

    Route::controller(CuentasTController::class)->group(function (){

        Route::get('/cuentasT','obtenerCuentasT')->name('cuentasT.index');
        Route::post('/cuentasT_filtrada','obtenerCuentasTXfecha')->name('cuentasT.filtro');
        
    });
    
    Route::controller(MayorizacionController::class)->group(function (){
        
        Route::post('/mayorizar','mayorizarMes')->name('cuentasT.mayor');
    });
        
    Route::resource('users', UserController::class);
    Route::resource('tbl-cuentas', TblCuentaController::class);
    Route::resource('tbl-permisos', TblPermisoController::class);
   
    Route::resource('tbl-registro-diario', TblRegistroDiarioController::class);
    Route::get('/buscarRegistro', [TblRegistroDiarioController::class, 'filtrar'])->name('filtar.por.codigo');

    Route::get('/balance-general', [BalanceGeneralController::class, 'index'])->name('balance.general');
    Route::get('/estado-resultados', [EstadoResultadoController::class, 'mostrarEstadoResultados'])->name('estado.resultados');
    Route::get('/estado-capital', [EstadoCapitalController::class, 'index'])->name('estado.capital');


});