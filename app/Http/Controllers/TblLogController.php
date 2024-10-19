<?php

namespace App\Http\Controllers;

use App\Models\TblLog;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Http\Requests\TblLogRequest;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class TblLogController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request): View
    {
        $tblLogs = TblLog::paginate();

        return view('tbl-log.index', compact('tblLogs'))
            ->with('i', ($request->input('page', 1) - 1) * $tblLogs->perPage());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        $tblLog = new TblLog();

        return view('tbl-log.create', compact('tblLog'));
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(TblLogRequest $request): RedirectResponse
    {
        TblLog::create($request->validated());

        return Redirect::route('tbl-logs.index')
            ->with('success', 'TblLog created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id): View
    {
        $tblLog = TblLog::find($id);

        return view('tbl-log.show', compact('tblLog'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id): View
    {
        $tblLog = TblLog::find($id);

        return view('tbl-log.edit', compact('tblLog'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(TblLogRequest $request, TblLog $tblLog): RedirectResponse
    {
        $tblLog->update($request->validated());

        return Redirect::route('tbl-logs.index')
            ->with('success', 'TblLog updated successfully');
    }

    public function destroy($id): RedirectResponse
    {
        dd("entre a show");
        TblLog::find($id)->delete();

        return Redirect::route('tbl-logs.index')
            ->with('success', 'TblLog deleted successfully');
    }

    public function deleteTodo($tblLogs): RedirectResponse {
        $log = $tblLogs; 
        foreach ($log as $i) {
            $i->delete();
        }
        
        return Redirect::route('tbl-logs.index')
            ->with('success', 'Todos los registros han sido eliminados.');
    }
}
