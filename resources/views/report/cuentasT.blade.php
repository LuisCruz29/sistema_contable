@extends('layouts.app')
@section('title')
    Reporte del Mayor
@endsection

@section('content')
<h1 class="m-2 text-center">CUENTAS T</h1>
@foreach($cuentas as $cuenta)
<div class="m-3 container">
    <h3 class="text-center">{{ $cuenta->nombreCuenta }}</h3>
    <table class="table ">
        <thead>
            <tr>
                <th></th>
                <th>Debe</th>
                <th>Haber</th>
            </tr>
        </thead>
        <tbody>
            @foreach($cuenta->tblRegistroDiarios as $registro)
                <tr>
                    <td>{{ $registro->fecha }}</td>
                    <td>{{ $registro->debe }}</td>
                    <td>{{ $registro->haber }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <div><strong>Total: </strong>{{ $cuenta->total }}</div>
</div>
@endforeach

@endsection