@extends('layouts.app')

@section('title')
    Mostrar Empleado
@endsection

@section('content')
<br><br>
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header" style="display: flex; justify-content: space-between; align-items: center;">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} User</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary btn-sm" href="{{ route('users.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body bg-white">
                        
                                <div class="form-group mb-2 mb20">
                                    <strong>Permiso Id:</strong>
                                    {{ $user->permiso_id }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Nombreempleado:</strong>
                                    {{ $user->nombreEmpleado }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Apellidoempleado:</strong>
                                    {{ $user->apellidoEmpleado }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Telefono:</strong>
                                    {{ $user->telefono }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>User:</strong>
                                    {{ $user->user }}
                                </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
