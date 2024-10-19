@extends('layouts.app')

@section('template_title')
    {{ $tblPermiso->name ?? __('Show') . " " . __('Tbl Permiso') }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header" style="display: flex; justify-content: space-between; align-items: center;">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Tbl Permiso</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary btn-sm" href="{{ route('tbl-permisos.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body bg-white">
                        
                                <div class="form-group mb-2 mb20">
                                    <strong>Role</strong>
                                    {{ $tblPermiso->rol }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Ingresar RD</strong>
                                    {{ $tblPermiso->ingresarRegistroDiario }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Consultar RD</strong>
                                    {{ $tblPermiso->consultarRegistroDiario }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Consultar CT</strong>
                                    {{ $tblPermiso->consultarCuentasT }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Consultar EF</strong>
                                    {{ $tblPermiso->consultarEstadosFinancieros }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Crear usuarios:</strong>
                                    {{ $tblPermiso->crearUsuarios }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Gestionar permisos:</strong>
                                    {{ $tblPermiso->gestionarPermisos }}
                                </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
