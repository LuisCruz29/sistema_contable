@extends('layouts.app')

@section('template_title')
    {{ $tblRegistroDiario->name ?? __('Show') . " " . __('Tbl Registro Diario') }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header" style="display: flex; justify-content: space-between; align-items: center;">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Tbl Registro Diario</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary btn-sm" href="{{ route('tbl-registro-diario.index') }}"> {{ __('Volver') }}</a>
                        </div>
                    </div>

                    <div class="card-body bg-white">
                        
                                <div class="form-group mb-2 mb20">
                                    <strong>Codigotransaccion:</strong>
                                    {{ $tblRegistroDiario->codigoTransaccion }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Cuenta Id:</strong>
                                    {{ $tblRegistroDiario->cuenta_id }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>User Id:</strong>
                                    {{ $tblRegistroDiario->user_id }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Debe:</strong>
                                    {{ $tblRegistroDiario->debe }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Haber:</strong>
                                    {{ $tblRegistroDiario->haber }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Descripcion:</strong>
                                    {{ $tblRegistroDiario->descripcion }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Fecha:</strong>
                                    {{ $tblRegistroDiario->fecha }}
                                </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
