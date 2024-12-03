@extends('layouts.app')

@section('content')
    <h1>Balance General</h1>

    <h2>Activos</h2>
    @if(!empty($activosSaldo))
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Nombre de Cuenta</th>
                    <th>Descripción</th>
                    <th>Saldo</th>
                </tr>
            </thead>
            <tbody>
                @foreach($activosSaldo as $saldo)
                    <tr>
                        <td>{{ $saldo['nombreCuenta'] }}</td>
                        <td>{{ $saldo['descripcion'] }}</td>
                        <td>${{ number_format($saldo['saldo'], 2) }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @else
        <p>No hay cuentas de tipo Activo.</p>
    @endif

    @if(isset($totalActivos))
        <h3>Total Activos: ${{ number_format($totalActivos, 2) }}</h3>
    @endif

    <h2>Pasivos</h2>
    @if(!empty($pasivosSaldo))
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Nombre de Cuenta</th>
                    <th>Descripción</th>
                    <th>Saldo</th>
                </tr>
            </thead>
            <tbody>
                @foreach($pasivosSaldo as $saldo)
                    <tr>
                        <td>{{ $saldo['nombreCuenta'] }}</td>
                        <td>{{ $saldo['descripcion'] }}</td>
                        <td>${{ number_format($saldo['saldo'], 2) }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <h3>Total Pasivos: ${{ number_format($totalPasivos, 2) }}</h3>
    @else
        <p>No hay cuentas de tipo Pasivo.</p>
    @endif

    <h2>Capital</h2>
    @if(!empty($capitalSaldo))
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Nombre de Cuenta</th>
                    <th>Descripción</th>
                    <th>Saldo</th>
                </tr>
            </thead>
            <tbody>
                @foreach($capitalSaldo as $saldo)
                    <tr>
                        <td>{{ $saldo['nombreCuenta'] }}</td>
                        <td>{{ $saldo['descripcion'] }}</td>
                        <td>${{ number_format($saldo['saldo'], 2) }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <h3>Total Capital: ${{ number_format($totalCapital, 2) }}</h3>
    @else
        <p>No hay cuentas de tipo Capital.</p>
    @endif

    <h2>Total Pasivo + Capital</h2>
    <h3>${{ number_format($totalPasivoCapital, 2) }}</h3>
@endsection
