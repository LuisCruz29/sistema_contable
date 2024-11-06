<?php

namespace App\Http\Controllers;

use App\Models\TblRegistroDiario;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Http\Requests\TblRegistroDiarioRequest;
use App\Models\TblCuenta;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

use function Laravel\Prompts\table;

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

    public function filtrar(Request $request){
        $request->validate([
            'codigoTransaccion' => 'required|numeric'
        ]);

        $tblRegistroDiarios = TblRegistroDiario::where('codigoTransaccion',$request->input('codigoTransaccion'))->paginate(2);
        return view('tbl-registro-diario.index', compact('tblRegistroDiarios'));
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
        
        $request->validate([
            'codigoTransaccion' => 'required',
            'user_id' => 'required',
            'fecha' => 'required|date',
            'cuenta_ids' => 'required|array|max:2',
            'debes' => 'required|array|max:2',
            'haberes' => 'required|array|max:2',
            'descripciones' => 'required|array|max:2',
            
        ]);

        
        foreach ($request->cuenta_ids as $index => $cuentaId) {
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
    

    public function destroy($codigo): RedirectResponse
    {
        DB::table('tbl_RegistroDiario')->where('codigoTransaccion',$codigo)->delete();
        return Redirect::route('tbl-registro-diario.index')
            ->with('success', 'Registro diario eliminado exitosamente');
    }


}
