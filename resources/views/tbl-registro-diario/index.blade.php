@extends('layouts.app')

@section('title')
    Tbl Registro Diarios
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
                        <!-- Formulario de Entrada -->
                        <!-- Tabla de Registros -->
                        <div class="table-responsive mt-4">
                            <table class="table table-striped table-hover">
                                <thead class="thead">
                                    <tr>
                                        <th>No</th>
                                        <th>Codigotransaccion</th>
                                        <th>Cuenta Id</th>
                                        <th>User Id</th>
                                        <th>Debe</th>
                                        <th>Haber</th>
                                        <th>Descripcion</th>
                                        <th>Fecha</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($tblRegistroDiarios as $tblRegistroDiario)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            <td>{{ $tblRegistroDiario->codigoTransaccion }}</td>
                                            <td>{{ $tblRegistroDiario->cuenta_id }}</td>
                                            <td>{{ $tblRegistroDiario->user_id }}</td>
                                            <td>{{ $tblRegistroDiario->debe }}</td>
                                            <td>{{ $tblRegistroDiario->haber }}</td>
                                            <td>{{ $tblRegistroDiario->descripcion }}</td>
                                            <td>{{ $tblRegistroDiario->fecha }}</td>
                                            <td>
                                                <form action="{{ route('tbl-registro-diario.destroy', $tblRegistroDiario->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary" href="{{ route('tbl-registro-diarios.show', $tblRegistroDiario->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Show') }}</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('tbl-registro-diarios.edit', $tblRegistroDiario->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Edit') }}</a>
                                                    @csrf
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
