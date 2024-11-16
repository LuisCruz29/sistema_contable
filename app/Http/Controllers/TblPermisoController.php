<?php

namespace App\Http\Controllers;

use App\Models\TblPermiso;
use App\Models\Log;  // Importar el modelo Log
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Http\Requests\TblPermisoRequest;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class TblPermisoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request): View
    {
        $tblPermisos = TblPermiso::paginate();

        return view('tbl-permiso.index', compact('tblPermisos'))
            ->with('i', ($request->input('page', 1) - 1) * $tblPermisos->perPage());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        $tblPermiso = new TblPermiso();

        return view('tbl-permiso.create', compact('tblPermiso'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(TblPermisoRequest $request): RedirectResponse
    {
        TblPermiso::create($request->validated());

        // Registrar el log
        Log::create([
            'user_id' => session('user') -> id,  // El ID del usuario que realizó la acción
            'fecha_hora' => now(),  // La fecha y hora actual
            'accion' => 'crear',  // Tipo de acción
            'modulo' => 'Permisos',  // El módulo donde se realiza la acción
            'descripcion' => 'Se creó un nuevo permiso.',  // Descripción de lo realizado
            'tipoLog' => 'Agrear Permiso',  // Tipo de log (puede ser informativo, error, etc.)
        ]);

        return Redirect::route('tbl-permisos.index')
            ->with('success', 'TblPermiso created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id): View
    {
        $tblPermiso = TblPermiso::find($id);

        return view('tbl-permiso.show', compact('tblPermiso'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id): View
    {
        $tblPermiso = TblPermiso::find($id);

        return view('tbl-permiso.edit', compact('tblPermiso'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(TblPermisoRequest $request, TblPermiso $tblPermiso): RedirectResponse
    {
        $tblPermiso->update($request->validated());

        // Registrar el log
        Log::create([
            'user_id' => session('user') -> id,  // El ID del usuario que realizó la acción
            'fecha_hora' => now(),  // La fecha y hora actual
            'accion' => 'actualizar',  // Tipo de acción
            'modulo' => 'Permisos',  // El módulo donde se realiza la acción
            'descripcion' => 'Se actualizó un permiso.',  // Descripción de lo realizado
            'tipoLog' => 'Actualizar permiso',  // Tipo de log
        ]);

        return Redirect::route('tbl-permisos.index')
            ->with('success', 'TblPermiso updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id): RedirectResponse
    {
        TblPermiso::find($id)->delete();

        // Registrar el log
        Log::create([
            'user_id' => session('user') -> id,  // El ID del usuario que realizó la acción
            'fecha_hora' => now(),  // La fecha y hora actual
            'accion' => 'eliminar',  // Tipo de acción
            'modulo' => 'Permisos',  // El módulo donde se realiza la acción
            'descripcion' => 'Se eliminó un permiso.',  // Descripción de lo realizado
            'tipoLog' => 'Eliminar permiso',  // Tipo de log
        ]);

        return Redirect::route('tbl-permisos.index')
            ->with('success', 'TblPermiso deleted successfully');
    }
}
