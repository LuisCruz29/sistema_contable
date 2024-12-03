@extends('layouts.app')

@section('content')
    <div class="container mt-4">
        <h1 class="text-center mb-4">Balance General</h1>

        <!-- Activos -->
        <h2 class="text-success">Activos</h2>
        @if(!empty($activosSaldo))
            <table class="table table-striped table-hover border rounded">
                <thead class="table-success">
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
                    <!-- Fila del total -->
                    <tr>
                        <td colspan="2" class="text-end fw-bold">Total Activos:</td>
                        <td class="fw-bold text-success">${{ number_format($totalActivos, 2) }}</td>
                    </tr>
                </tbody>
            </table>
        @else
            <p class="text-muted">No hay cuentas de tipo Activo.</p>
        @endif

        <!-- Pasivos -->
        <h2 class="text-danger mt-5">Pasivos</h2>
        @if(!empty($pasivosSaldo))
            <table class="table table-striped table-hover border rounded">
                <thead class="table-danger">
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
                    <!-- Fila del total -->
                    <tr>
                        <td colspan="2" class="text-end fw-bold">Total Pasivos:</td>
                        <td class="fw-bold text-danger">${{ number_format($totalPasivos, 2) }}</td>
                    </tr>
                </tbody>
            </table>
        @else
            <p class="text-muted">No hay cuentas de tipo Pasivo.</p>
        @endif

        <!-- Capital -->
        <h2 class="text-warning mt-5">Capital</h2>
        @if(!empty($capitalSaldo))
            <table class="table table-striped table-hover border rounded">
                <thead class="table-warning">
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
                    <!-- Fila del total -->
                    <tr>
                        <td colspan="2" class="text-end fw-bold">Total Capital:</td>
                        <td class="fw-bold text-warning">${{ number_format($totalCapital, 2) }}</td>
                    </tr>
                </tbody>
            </table>
        @else
            <p class="text-muted">No hay cuentas de tipo Capital.</p>
        @endif

        <!-- Total Pasivo + Capital -->
        <div class="mt-5">
            <h2 class="text-info">Total Pasivo + Capital</h2>
            <table class="table table-bordered border rounded">
                <tbody>
                    <tr>
                        <td class="text-end fw-bold">Total Pasivo + Capital:</td>
                        <td class="fw-bold text-info">${{ number_format($totalPasivoCapital, 2) }}</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
@endsection
