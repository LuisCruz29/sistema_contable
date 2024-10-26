@extends('layouts.app')

@section('title')
    Detalle Cuenta
@endsection

@section('content')
    <section class="content container-fluid mt-5">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header" style="display: flex; justify-content: space-between; align-items: center;">
                        <div class="float-left">
                            <span class="card-title">{{ __('Detalle') }} Cuenta</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary btn-sm" href="{{ route('tbl-cuentas.index') }}"> {{ __('Volver') }}</a>
                        </div>
                    </div>

                    <div class="card-body bg-white">
                        
                                <div class="form-group mb-2 mb20">
                                    <strong>Nombre Cuenta:</strong>
                                    {{ $cuenta->nombreCuenta }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Descripcion:</strong>
                                    {{ $cuenta->descripcion }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Tipo:</strong>
                                    {{ $cuenta->tipo }}
                                </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
