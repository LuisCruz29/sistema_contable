@extends('layouts.app')

@section('title')
    Cuentas
@endsection

@section('content')
    <div class="container-fluid mt-5">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Cuentas') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('tbl-cuentas.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Crear Nuevo') }}
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
                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead class="thead">
                                    <tr>
                                        <th>ID</th>
                                        <th >Nombrecuenta</th>
                                        <th >Descripcion</th>
                                        <th >Tipo</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($cuentas as $cuenta)
                                        <tr>
                                            <td>{{ $cuenta->id }}</td>
                                            <td >{{ $cuenta->nombreCuenta }}</td>
                                            <td >{{ $cuenta->descripcion }}</td>
                                            <td >{{ $cuenta->tipo }}</td>

                                            <td>
                                                <form action="{{ route('tbl-cuentas.destroy', $cuenta->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('tbl-cuentas.show', $cuenta->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Show') }}</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('tbl-cuentas.edit', $cuenta->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Edit') }}</a>
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
                {!! $cuentas->withQueryString()->links() !!}
            </div>
        </div>
    </div>
@endsection
