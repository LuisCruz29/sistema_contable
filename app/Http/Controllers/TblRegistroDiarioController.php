<?php

namespace App\Http\Controllers;

use App\Models\TblRegistroDiario;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Http\Requests\TblRegistroDiarioRequest;
use App\Models\TblCuenta;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class TblRegistroDiarioController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request): View
    {
        $tblRegistroDiarios = TblRegistroDiario::paginate();

        return view('tbl-registro-diario.index', compact('tblRegistroDiarios'))
            ->with('i', ($request->input('page', 1) - 1) * $tblRegistroDiarios->perPage());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        $tblRegistroDiario = new TblRegistroDiario();
        $cuentas=TblCuenta::all();
        return view('tbl-registro-diario.create', compact('tblRegistroDiario','cuentas'));
    }

   
    public function store(TblRegistroDiarioRequest $request): RedirectResponse
    {
        $contarRegistros = TblRegistroDiario::count();

        if ($contarRegistros >= 2) {
            return Redirect::route('tbl-registro-diario.index')
                ->with('error', 'No se pueden crear más de dos registros en el libro diario.');
        }else {
            TblRegistroDiario::create($request->validated());

            return Redirect::route('tbl-registro-diario.index')
                ->with('success', 'Registro diario creado exitosamente.');
           
        }
    }


    /**
     * Display the specified resource.
     */
    public function show($id): View
    {
        $tblRegistroDiario = TblRegistroDiario::find($id);

        return view('tbl-registro-diario.show', compact('tblRegistroDiario'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id): View
    {
        $tblRegistroDiario = TblRegistroDiario::find($id);

        return view('tbl-registro-diario.edit', compact('tblRegistroDiario'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(TblRegistroDiarioRequest $request, TblRegistroDiario $tblRegistroDiario): RedirectResponse
    {
        $tblRegistroDiario->update($request->validated());

        return Redirect::route('tbl-registro-diarios.index')
            ->with('success', 'TblRegistroDiario updated successfully');
    }

    public function destroy($id): RedirectResponse
    {
        TblRegistroDiario::find($id)->delete();

        return Redirect::route('tbl-registro-diarios.index')
            ->with('success', 'Registro diario eliminado exitosamente');
    }
}
