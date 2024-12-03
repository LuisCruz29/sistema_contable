@extends('layouts.app')

@section('title')
    Estado de Resultados
@endsection

@section('content')
<div class="container">
    <h2 class="title">Estado de Resultados</h2>

    <div class="estado-cuadro">
        <h3>Ingresos:</h3>
        <table class="estado-resultados">
            <thead>
                <tr>
                    <th>Cuenta</th>
                    <th>Monto</th>
                </tr>
            </thead>
            <tbody>
               
                    @foreach ($ingresosData as $ingreso)
                        <tr>
                            <td>{{ $ingreso['nombreCuenta'] }}</td>
                            <td>${{  number_format($totalIngresos, 2) }}</td>
                        </tr>
                    @endforeach
                    <tr>
                        <td><strong>Total Ingresos</strong></td>
                        <td><strong>${{ number_format($totalIngresos, 2) }}</strong></td>
                    </tr>
            </tbody>
        </table>
    </div>

    <!-- Gastos -->
    <div class="estado-cuadro">
        <h3>Menos</h3>
        <h3>Gastos:</h3>
        <table class="estado-resultados">
            <thead>
                <tr>
                    <th>Cuenta</th>
                    <th>Monto</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($gastosData as $gasto)
                    <tr>
                        <td>{{ $gasto['nombreCuenta'] }}</td>
                        <td>${{ number_format($gasto['totalDebe'], 2) }}</td>
                    </tr>
                @endforeach
                <tr>
                    <td><strong>Total Gastos</strong></td>
                    <td><strong>${{ number_format($totalGastos, 2) }}</strong></td>
                </tr>
            </tbody>
        </table>
    </div>

    <div class="estado-cuadro">
        <h3>Utilidad Total:</h3>
        <table class="estado-resultados">
            <tbody>
                <tr class="final">
                    <td><strong>${{ number_format($utilidadTotal, 2) }}</strong></td>
                </tr>
            </tbody>
        </table>
    </div>
</div>

<style>
    .container {
        max-width: 900px;
        margin: 40px auto;
        font-family: 'Arial', sans-serif;
    }

    .title {
        font-size: 32px;
        text-align: center;
        color: #2c3e50;
        margin-bottom: 20px;
    }

    .estado-cuadro {
        background-color: #fff;
        border-radius: 8px;
        padding: 20px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        margin-bottom: 20px;
    }

    .estado-resultados {
        width: 100%;
        border-collapse: collapse;
    }

    .estado-resultados th,
    .estado-resultados td {
        text-align: left;
        padding: 10px;
        border-bottom: 1px solid #ddd;
    }

    .estado-resultados th {
        background-color: #34495e;
        color: white;
        font-weight: bold;
    }

    .estado-resultados .total td {
        font-weight: bold;
        color: #2c3e50;
    }

    .final td {
        background-color: #2ecc71;
        color: white;
    }
</style>
@endsection
