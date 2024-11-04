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

   
    public function store(Request $request)
{
    // Validar los datos
    $request->validate([
        'codigoTransaccion' => 'required',
        'user_id' => 'required',
        'fecha' => 'required|date',
        'cuenta_ids' => 'required|array|max:2',
        'debes' => 'required|array|max:2',
        'haberes' => 'required|array|max:2',
        'descripciones' => 'required|array|max:2',
        // Puedes agregar validaciones adicionales según sea necesario
    ]);

    // Recorrer cada registro enviado
    foreach ($request->cuenta_ids as $index => $cuentaId) {
        // Crear un nuevo registro en la base de datos
        TblRegistroDiario::create([
            'codigoTransaccion' => $request->codigoTransaccion,
            'cuenta_id' => $cuentaId,
            'user_id' => $request->user_id,
            'debe' => $request->debes[$index],
            'haber' => $request->haberes[$index],
            'descripcion' => $request->descripciones[$index],
            'fecha' => $request->fecha,
        ]);
    }

    // Redireccionar o retornar una respuesta
    return Redirect::route('tbl-registro-diario.index')->with('success', 'Registros guardados exitosamente');
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

        return Redirect::route('tbl-registro-diario.index')
            ->with('success', 'TblRegistroDiario updated successfully');
    }

    public function destroy($id): RedirectResponse
    {
        TblRegistroDiario::find($id)->delete();

        return Redirect::route('tbl-registro-diario.index')
            ->with('success', 'Registro diario eliminado exitosamente');
    }
}
