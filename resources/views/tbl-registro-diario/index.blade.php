@extends('layouts.app')

@section('title')
    Tbl Registro Diarios
@endsection

@section('content')
    
    <div class="container-fluid mt-5">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">
                            <span id="card_title">{{ __('Registros Diarios') }}</span>
                            <div class="float-right">
                                <a href="{{ route('tbl-registro-diario.create') }}" class="btn btn-primary btn-sm float-right" data-placement="left">
                                    {{ __('Create New') }}
                                </a>
                            </div>
                        </div>
                    </div>

                    @if ($message = Session::get('success'))
                        <div class="alert alert-success m-4">
                            <p>{{ $message }}</p>
                        </div>
                    @endif

                    <div class="card-body bg-white">
                       <div class="container">
                           <form action="{{route('filtar.por.codigo')}}" method="get">                           
                               <label for="codigo" class="form-label">Codigo Transaccion</label>
                               <input type="number" name="codigoTransaccion" class="form-control" id="codigo">
                                <div class="mt-2">
                                    <button type="submit" class="btn btn-primary mt-1">Filtar</button>
                                    <a href="{{route('tbl-registro-diario.index')}}" class="btn btn-primary mt-1">Limpiar</a>
                                </div>
                           </form>   
                       </div>
                        
                        <div class="table-responsive mt-4">
                            <table class="table table-striped table-hover text-center">
                                <thead class="thead">
                                    <tr>
                                        <th>Codigo Transaccion</th>
                                        <th>Cuenta</th>
                                        <th>User</th>
                                        <th>Debe</th>
                                        <th>Haber</th>
                                        <th>Descripcion</th>
                                        <th>Fecha</th>
                                        <th>Acciones</th>
                                    </tr>
                                </thead>
                                <tbody class="">
                                    @foreach ($tblRegistroDiarios as $tblRegistroDiario)
                                        <tr>
                                            <td>{{ $tblRegistroDiario->codigoTransaccion }}</td>
                                            <td>{{ $tblRegistroDiario->tblCuenta->nombreCuenta }}</td>
                                            <td>{{ $tblRegistroDiario->user->nombreEmpleado }}</td>
                                            <td>{{ $tblRegistroDiario->debe }}</td>
                                            <td>{{ $tblRegistroDiario->haber }}</td>
                                            <td>{{ $tblRegistroDiario->descripcion }}</td>
                                            <td>{{ $tblRegistroDiario->fecha }}</td>
                                            <td>
                                                <form action="{{ route('tbl-registro-diario.destroy', $tblRegistroDiario->codigoTransaccion) }}" method="POST">                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm" onclick="event.preventDefault(); confirm('Are you sure to delete?') ? this.closest('form').submit() : false;"><i class="fa fa-fw fa-trash"></i> {{ __('Delete') }}</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $tblRegistroDiarios->withQueryString()->links() !!}
            </div>
        </div>
    </div>
@endsection
