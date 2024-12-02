@extends('layouts.app')

@section('title')
    Reporte del Mayor
@endsection

@section('content')
<h1 class="m-2 text-center">CUENTAS T</h1>
@if ($message = Session::get('success'))
    <div class="alert alert-success m-4">
        <p>{{ $message }}</p>
    </div>
@endif
@if ($message = Session::get('error'))
    <div class="alert alert-danger m-4">
        <p>{{ $message }}</p>
    </div>
@endif
<div class="container my-3">
    <div class="container d-flex justify-content-center">

        <form action="{{route('cuentasT.filtro')}}" method="post">
            @csrf
            <label for="fecha_inicio">Fecha Inicio: </label>
            <input type="date" name="fecha_inicio" id="fecha_inicio">
            <label for="fecha_fin">Fecha Fin: </label>
            <input type="date" name="fecha_fin" id="fecha_fin">
            <button type="submit" class="ms-2 btn btn-primary">Filtrar por fecha</button>
        </form>
    </div>
</div>
<div class="container mb-3">
    <div class="container d-flex justify-content-center">
        <form action="{{route('cuentasT.mayor')}}" method="post">
            @csrf
            <label for="fecha_inicio">Fecha Inicio: </label>
            <input type="date" name="fecha_inicio" id="fecha_inicio">
            <label for="fecha_fin">Fecha Fin: </label>
            <input type="date" name="fecha_fin" id="fecha_fin">
            <button type="submit" class="ms-2 btn btn-primary">Mayorizar mes</button>
        </form>
    </div>
</div>
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
                                    @if($cuenta->tblCuentasT !== null)
                                        @foreach($cuenta->tblCuentasT as $registro)
                                            @if($registro->debe > 0)
                                                    <li>{{ $registro->fecha }}: <strong>{{ $registro->debe }}</strong></li>
                                                @endif
                                        @endforeach
                                    @endif
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
                                    @if($cuenta->tblCuentasT !== null)
                                        @foreach($cuenta->tblCuentasT as $registro)
                                            @if($registro->haber > 0)
                                                    <li>{{ $registro->fecha }}: <strong>{{ $registro->haber }}</strong></li>
                                                @endif
                                        @endforeach
                                    @endif
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
                                    <strong class="text-success">Total: {{ $cuenta->total }}</strong>
                                @endif
                            </div>

                            <!-- Total en la columna Crédito -->
                            <div class="col-6">
                                @if($cuenta->total_haber >= $cuenta->total_debe)
                                    <strong class="text-danger">Total: {{ $cuenta->total }}</strong>
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
