@extends('layouts.app')

@section('template_title')
    {{ $tblLog->name ?? __('Show') . " " . __('Tbl Log') }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header" style="display: flex; justify-content: space-between; align-items: center;">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Tbl Log</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary btn-sm" href="{{ route('tbl-logs.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body bg-white">
                        
                                <div class="form-group mb-2 mb20">
                                    <strong>User Id:</strong>
                                    {{ $tblLog->user_id }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Fecha Hora:</strong>
                                    {{ $tblLog->fecha_hora }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Accion:</strong>
                                    {{ $tblLog->accion }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Modulo:</strong>
                                    {{ $tblLog->modulo }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Descripcion:</strong>
                                    {{ $tblLog->descripcion }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Tipolog:</strong>
                                    {{ $tblLog->tipoLog }}
                                </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
