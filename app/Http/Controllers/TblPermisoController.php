<?php

namespace App\Http\Controllers;

use App\Models\TblPermiso;
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

        return Redirect::route('tbl-permisos.index')
            ->with('success', 'TblPermiso updated successfully');
    }

    public function destroy($id): RedirectResponse
    {
        TblPermiso::find($id)->delete();

        return Redirect::route('tbl-permisos.index')
            ->with('success', 'TblPermiso deleted successfully');
    }
}
