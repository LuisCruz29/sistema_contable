<?php

namespace App\Http\Controllers;

use App\Models\TblCuenta;
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
        TblCuenta::create($request->validated());

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

        return Redirect::route('tbl-cuentas.index')
            ->with('success', 'Cuenta modificada exitosamente');
    }

    public function destroy($id): RedirectResponse
    {
        TblCuenta::find($id)->delete();

        return Redirect::route('tbl-cuentas.index')
            ->with('success', 'Cuenta eliminada exitosamente');
    }
}
