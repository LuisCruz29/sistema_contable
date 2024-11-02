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
                                <a href="{{ route('tbl-registro-diarios.create') }}" class="btn btn-primary btn-sm float-right" data-placement="left">
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
                        <form action="{{ route('tbl-registro-diarios.store') }}" method="POST">
                            @csrf
                            <div class="row padding-1 p-1">
                                <div class="col-md-4">
                                    <div class="form-group mb-2 mb20">
                                        <label for="codigo_transaccion" class="form-label">{{ __('Ingres el codigo de transaccion') }}</label>
                                        <input type="number" name="codigoTransaccion" class="form-control @error('codigo Transaccion') is-invalid @enderror" value="{{ old('codigoTransaccion') }}" id="codigo_transaccion" placeholder="Codigo transaccion">
                                        {!! $errors->first('codigoTransaccion', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group mb-2 mb20">
                                        <label for="cuenta_id" class="form-label">{{ __('Ingrese el id de la cuenta') }}</label>
                                        <input type="number" name="cuenta_id" class="form-control @error('cuenta_id') is-invalid @enderror" value="{{ old('cuenta_id') }}" id="cuenta_id" placeholder="ID cuenta">
                                        {!! $errors->first('cuenta_id', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group mb-2 mb20">
                                        <label for="user_id" class="form-label">{{ __('Ingrese el id del usuario') }}</label>
                                        <input type="text" name="user_id" class="form-control @error('user_id') is-invalid @enderror" value="{{ old('user_id') }}" id="user_id" placeholder="User Id">
                                        {!! $errors->first('user_id', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
                                    </div>
                                </div>
                            </div>
                            <div class="row padding-1 p-1">
                                <div class="col-md-4">
                                    <div class="form-group mb-2 mb20">
                                        <label for="debe" class="form-label">{{ __('Ingrese el monto a debitar') }}</label>
                                        <input type="number" name="debe" class="form-control @error('debe') is-invalid @enderror" value="{{ old('debe') }}" id="debe" placeholder="Debe">
                                        {!! $errors->first('debe', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group mb-2 mb20">
                                        <label for="haber" class="form-label">{{ __('Ingrese el monto a acreditar') }}</label>
                                        <input type="text" name="haber" class="form-control @error('haber') is-invalid @enderror" value="{{ old('haber') }}" id="haber" placeholder="Haber">
                                        {!! $errors->first('haber', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group mb-2 mb20">
                                        <label for="descripcion" class="form-label">{{ __('Descripcion') }}</label>
                                        <input type="text" name="descripcion" class="form-control @error('descripcion') is-invalid @enderror" value="{{ old('descripcion') }}" id="descripcion" placeholder="Descripcion">
                                        {!! $errors->first('descripcion', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
                                    </div>
                                </div>
                            </div>
                            <div class="row padding-1 p-1">
                                <div class="col-md-4">
                                    <div class="form-group mb-2 mb20">
                                        <label for="fecha" class="form-label">{{ __('Fecha') }}</label>
                                        <input type="date" name="fecha" class="form-control @error('fecha') is-invalid @enderror" value="{{ old('fecha') }}" id="fecha" placeholder="Fecha">
                                        {!! $errors->first('fecha', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12 mt20 mt-2">
                                    <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
                                </div>
                            </div>
                        </form>

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
                                                <form action="{{ route('tbl-registro-diarios.destroy', $tblRegistroDiario->id) }}" method="POST">
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
