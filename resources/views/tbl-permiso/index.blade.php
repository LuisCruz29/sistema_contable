@extends('layouts.app')

@section('title')
    PERMISOS
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
                                {{ __('Permisos y roles') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('tbl-permisos.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
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
                                        <th class="text-center">No</th>
                                        <th class="text-center">Roles</th>
                                        <th class="text-center">Ingresar RD</th>
                                        <th class="text-center">Consultar RD</th>
                                        <th class="text-center">Consultar CT</th>
                                        <th class="text-center">Consultar EF</th>
                                        <th class="text-center">Crear usuarios</th>
                                        <th class="text-center">Gestionar permisos</th>
                                        <th class="text-center"></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($tblPermisos as $tblPermiso)
                                        <tr>
                                            <td class="text-center">{{ ++$i }}</td>
                                            <td class="text-center">{{ $tblPermiso->rol }}</td>

                                            <td class="text-center">
                                                {{ $tblPermiso->ingresarRegistroDiario ? 'True' : 'False' }}
                                            </td>

                                            <td class="text-center">
                                                {{ $tblPermiso->consultarRegistroDiario ? 'True' : 'False' }}
                                            </td>

                                            <td class="text-center">
                                                {{ $tblPermiso->consultarCuentasT ? 'True' : 'False' }}
                                            </td>

                                            <td class="text-center">
                                                {{ $tblPermiso->consultarEstadosFinancieros ? 'True' : 'False' }}
                                            </td>

                                            <td class="text-center">
                                                {{ $tblPermiso->crearUsuarios ? 'True' : 'False' }}
                                            </td>

                                            <td class="text-center">
                                                {{ $tblPermiso->gestionarPermisos ? 'True' : 'False' }}
                                            </td>

                                            <td class="text-center">
                                                <form action="{{ route('tbl-permisos.destroy', $tblPermiso->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-success" href="{{ route('tbl-permisos.edit', $tblPermiso->id) }}">
                                                        <i class="fa fa-fw fa-edit"></i> {{ __('Editar') }}
                                                    </a>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

                {!! $tblPermisos->withQueryString()->links() !!}
            </div>
        </div>
    </div>
@endsection
