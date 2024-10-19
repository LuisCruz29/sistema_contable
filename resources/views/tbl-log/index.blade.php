@extends('layouts.app')

@section('title')
   LOGS
@endsection

@section('content')
<br>
<br>
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Movimientos en el sistema') }}
                            </span>

                        </td>
                        
                             <div class="float-right">
                                <form action="{{ route('tbl-logs.deleteTodo')}}" method="POST" onsubmit="return confirm('¿Estás seguro de que deseas eliminar todos los registros?');" class="float-right">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-primary btn-sm">
                                        {{ __('Eliminar Todos') }}
                                    </button>
                                </form>
                              </div>
                        </div>
                    </div>
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success m-4">
                            <p>{{ $message }}</p>
                        </div>
                    @endif

                    <div class="card-body bg-white">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead class="thead">
                                    <tr>
                                        <th>No</th>
                                        
									<th >User Id</th>
									<th >Fecha Hora</th>
									<th >Accion</th>
									<th >Modulo</th>
									<th >Descripcion</th>
									<th >Tipolog</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($tblLogs as $tblLog)
                                        <tr>
                                            <td>{{$tblLog->id}}</td>
                                            
										<td >{{ $tblLog->user_id }}</td>
										<td >{{ $tblLog->fecha_hora }}</td>
										<td >{{ $tblLog->accion }}</td>
										<td >{{ $tblLog->modulo }}</td>
										<td >{{ $tblLog->descripcion }}</td>
										<td >{{ $tblLog->tipoLog }}</td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $tblLogs->withQueryString()->links() !!}
            </div>
        </div>
    </div>
@endsection
