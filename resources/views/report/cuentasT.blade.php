@extends('layouts.app')

@section('title')
    Reporte del Mayor
@endsection

@section('content')
<h1 class="m-2 text-center">CUENTAS T</h1>

<div class="container">
    @foreach($cuentas as $cuenta)
        <div class="row justify-content-center mb-4">
            <!-- Tarjeta más ancha -->
            <div class="col-12 col-lg-8">
                <div class="card shadow-sm">
                    <!-- Encabezado con fondo negro -->
                    <div class="card-header text-center bg-dark text-white">
                        <h5 class="mb-0">{{ $cuenta->nombreCuenta }}</h5>
                    </div>
                    <div class="card-body">
                        <div class="row text-center">
                            <!-- Columna Débito -->
                            <div class="col-6 border-end">
                                <h6 class="text-success">Debe</h6>
                                <ul class="list-unstyled">
                                    @foreach($cuenta->tblRegistroDiarios as $registro)
                                        @if($registro->debe > 0)
                                            <li>{{ $registro->fecha }}: <strong>{{ $registro->debe }}</strong></li>
                                        @endif
                                    @endforeach
                                </ul>
                            </div>

                            <!-- Columna Crédito -->
                            <div class="col-6">
                                <h6 class="text-danger">Haber</h6>
                                <ul class="list-unstyled">
                                    @foreach($cuenta->tblRegistroDiarios as $registro)
                                        @if($registro->haber > 0)
                                            <li>{{ $registro->fecha }}: <strong>{{ $registro->haber }}</strong></li>
                                        @endif
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer text-center">
                        <div class="row">
                            <!-- Total en la columna Débito -->
                            <div class="col-6 border-end">
                                @if($cuenta->total_debe > $cuenta->total_haber)
                                    <strong class="text-success">Total: {{ $cuenta->total_debe }}</strong>
                                @endif
                            </div>

                            <!-- Total en la columna Crédito -->
                            <div class="col-6">
                                @if($cuenta->total_haber >= $cuenta->total_debe)
                                    <strong class="text-danger">Total: {{ $cuenta->total_haber }}</strong>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
</div>
@endsection
