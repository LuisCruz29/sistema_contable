<?php

namespace App\Http\Controllers;

use App\Models\TblCuenta;
use App\Models\Log;  // Importar el modelo Log
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Http\Requests\TblCuentaRequest;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class TblCuentaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request): View
    {
        $cuentas = TblCuenta::paginate();

        return view('tbl-cuenta.index', compact('cuentas'))
            ->with('i', ($request->input('page', 1) - 1) * $cuentas->perPage());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        $cuenta = new TblCuenta();

        return view('tbl-cuenta.create', compact('cuenta'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(TblCuentaRequest $request): RedirectResponse
    {
        $cuenta = TblCuenta::create($request->validated());

        // Registrar el evento de creación de cuenta
        Log::create([
            'user_id' => session('user')->id,  // Suponiendo que el usuario está en la sesión
            'fecha_hora' => now(),
            'accion' => 'crear cuenta',
            'modulo' => 'Cuentas',
            'descripcion' => 'Se ha creado una nueva cuenta con ID ' . $cuenta->id,
            'tipoLog' => 'informativo',
        ]);

        return Redirect::route('tbl-cuentas.index')
            ->with('success', 'Cuenta creada exitosamente.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id): View
    {
        $cuenta = TblCuenta::find($id);

        return view('tbl-cuenta.show', compact('cuenta'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id): View
    {
        $cuenta = TblCuenta::find($id);

        return view('tbl-cuenta.edit', compact('cuenta'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(TblCuentaRequest $request, TblCuenta $tblCuenta): RedirectResponse
    {
        $tblCuenta->update($request->validated());

        // Registrar el evento de actualización de cuenta
        Log::create([
            'user_id' => session('user')->id,  // Suponiendo que el usuario está en la sesión
            'fecha_hora' => now(),
            'accion' => 'actualizar cuenta',
            'modulo' => 'Cuentas',
            'descripcion' => 'Se ha actualizado la cuenta con ID ' . $tblCuenta->id,
            'tipoLog' => 'informativo',
        ]);

        return Redirect::route('tbl-cuentas.index')
            ->with('success', 'Cuenta modificada exitosamente');
    }

    public function destroy($id): RedirectResponse
    {
        $cuenta = TblCuenta::find($id);
        $cuenta->delete();

        // Registrar el evento de eliminación de cuenta
        Log::create([
            'user_id' => session('user')->id,  // Suponiendo que el usuario está en la sesión
            'fecha_hora' => now(),
            'accion' => 'eliminar cuenta',
            'modulo' => 'Cuentas',
            'descripcion' => 'Se ha eliminado la cuenta con ID ' . $cuenta->id,
            'tipoLog' => 'informativo',
        ]);

        return Redirect::route('tbl-cuentas.index')
            ->with('success', 'Cuenta eliminada exitosamente');
    }
}
