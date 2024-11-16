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
        $tblPermiso = TblPermiso::create($request->validated());

        // Registrar el evento de creación de permiso
        Log::create([
            'user_id' => session('user')->id,  // Suponiendo que el usuario está en la sesión
            'fecha_hora' => now(),
            'accion' => 'crear permiso',
            'modulo' => 'Permisos',
            'descripcion' => 'Se ha creado un nuevo permiso con ID ' . $tblPermiso->id,
            'tipoLog' => 'informativo',
        ]);

        return Redirect::route('tbl-permisos.index')
            ->with('success', 'Permiso creado exitosamente.');
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

        // Registrar el evento de actualización de permiso
        Log::create([
            'user_id' => session('user')->id,  // Suponiendo que el usuario está en la sesión
            'fecha_hora' => now(),
            'accion' => 'actualizar permiso',
            'modulo' => 'Permisos',
            'descripcion' => 'Se ha actualizado el permiso con ID ' . $tblPermiso->id,
            'tipoLog' => 'informativo',
        ]);

        return Redirect::route('tbl-permisos.index')
            ->with('success', 'Permiso actualizado exitosamente');
    }

    public function destroy($id): RedirectResponse
    {
        $tblPermiso = TblPermiso::find($id);
        $tblPermiso->delete();

        // Registrar el evento de eliminación de permiso
        Log::create([
            'user_id' => session('user')->id,  // Suponiendo que el usuario está en la sesión
            'fecha_hora' => now(),
            'accion' => 'eliminar permiso',
            'modulo' => 'Permisos',
            'descripcion' => 'Se ha eliminado el permiso con ID ' . $tblPermiso->id,
            'tipoLog' => 'informativo',
        ]);

        return Redirect::route('tbl-permisos.index')
            ->with('success', 'Permiso eliminado exitosamente');
    }
}
