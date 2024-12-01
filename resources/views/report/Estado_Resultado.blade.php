@extends('layouts.app')

@section('title')
    Estado de Resultados
@endsection

@section('content')
    <div class="container">
        <h2 class="title">Estado de Resultados</h2>

        <!-- Filtro por Fecha -->
        <div class="filter-container">
            <label for="fecha_inicio">Fecha Inicio:</label>
            <input type="date" id="fecha_inicio" name="fecha_inicio" class="filter-input">
            <label for="fecha_fin">Fecha Fin:</label>
            <input type="date" id="fecha_fin" name="fecha_fin" class="filter-input">
            <button class="btn btn-primary" onclick="filtrarFecha()">Filtrar</button>
        </div>

        <!-- Tabla de Estado de Resultados -->
        <div class="estado-cuadro">
            <table class="estado-resultados">
                <thead>
                    <tr>
                        <th>Cuenta</th>
                        <th>Monto</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- Ingresos -->
                    <tr class="category">
                        <td colspan="2">Ingresos</td>
                    </tr>
                    <tr>
                        <td>Ventas de Gas Propano</td>
                        <td>$150,000</td>
                    </tr>
                    <tr>
                        <td>Subsidios Recibidos</td>
                        <td>$40,000</td>
                    </tr>
                    <tr class="total">
                        <td><strong>Total Ingresos</strong></td>
                        <td><strong>$190,000</strong></td>
                    </tr>

                    <!-- Gastos -->
                    <tr class="category">
                        <td colspan="2">Gastos</td>
                    </tr>
                    <tr>
                        <td>Gastos Generales</td>
                        <td>$20,000</td>
                    </tr>
                    <tr>
                        <td>Gastos por Salarios</td>
                        <td>$35,000</td>
                    </tr>
                    <tr>
                        <td>Gastos por Suministros</td>
                        <td>$10,000</td>
                    </tr>
                    <tr class="total">
                        <td><strong>Total Gastos</strong></td>
                        <td><strong>$65,000</strong></td>
                    </tr>

                    <!-- Utilidad Bruta -->
                    <tr class="highlight">
                        <td><strong>Utilidad Bruta</strong></td>
                        <td><strong>$125,000</strong></td>
                    </tr>

                    <!-- Otros Ingresos/Gastos -->
                    <tr class="category">
                        <td colspan="2">Otros Ingresos/Gastos</td>
                    </tr>
                    <tr>
                        <td>Cuentas por Cobrar</td>
                        <td>$3,000</td>
                    </tr>
                    <tr>
                        <td>Cuentas por Pagar</td>
                        <td>($2,000)</td>
                    </tr>
                    <tr class="total">
                        <td><strong>Saldo de Otros Ingresos/Gastos</strong></td>
                        <td><strong>$1,000</strong></td>
                    </tr>

                    <!-- Utilidad Antes de Impuestos -->
                    <tr class="highlight">
                        <td><strong>Utilidad Antes de Impuestos</strong></td>
                        <td><strong>$126,000</strong></td>
                    </tr>

                    <!-- Impuestos -->
                    <tr class="category">
                        <td colspan="2">Impuestos</td>
                    </tr>
                    <tr>
                        <td>Impuestos sobre la Renta</td>
                        <td>$20,000</td>
                    </tr>

                    <!-- Utilidad Neta -->
                    <tr class="highlight final">
                        <td><strong>Utilidad Neta</strong></td>
                        <td><strong>$106,000</strong></td>
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

        .filter-container {
            display: flex;
            justify-content: center;
            gap: 10px;
            margin-bottom: 30px;
        }

        .filter-input {
            padding: 5px;
            font-size: 16px;
            border-radius: 5px;
            border: 1px solid #ccc;
        }

        .btn {
            padding: 8px 15px;
            background-color: #2980b9;
            color: white;
            font-size: 16px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        .btn:hover {
            background-color: #3498db;
        }

        .estado-cuadro {
            background-color: #fff;
            border-radius: 8px;
            padding: 20px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
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

        .estado-resultados .category td {
            background-color: #ecf0f1;
            font-weight: bold;
        }

        .estado-resultados .total td {
            font-weight: bold;
            color: #2c3e50;
        }

        .estado-resultados .highlight td {
            background-color: #dff9fb;
            font-weight: bold;
        }

        .final td {
            background-color: #2ecc71;
            color: white;
        }
    </style>

@endsection
