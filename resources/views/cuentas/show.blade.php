@extends('layouts.app')

@section('title')
    Mostrar Cuenta
@endsection

@section('content')
<br><br>
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header" style="display: flex; justify-content: space-between; align-items: center;">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Cuenta</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary btn-sm" href="{{ route('users.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body bg-white">
                
                        <div class="form-group mb-2 mb20">
                            <strong>ID:</strong>
                            {{ $cuenta->id }}
                        </div>
                        <div class="form-group mb-2 mb20">
                            <strong>Nombre Cuenta:</strong>
                            {{ $cuenta->nombreCuenta }}
                        </div>
                        <div class="form-group mb-2 mb20">
                            <strong>Descripcion:</strong>
                            {{ $cuenta->descripicion }}
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
