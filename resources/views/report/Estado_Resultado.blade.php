@extends('layouts.app')

@section('title')
    ESTADO DE RESULTADO
@endsection

@section('content')
    <h2>Estado de Resultados</h2>
    <div class="balance-container">
        <div class="balance-section">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>Descripción</th>
                        <th>Monto</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- Ingresos -->
                    <tr>
                        <td class="gastos">Ingresos</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>Ventas</td>
                        <td>$20,000</td>
                    </tr>
                    <tr>
                        <td>Ingresos por servicios</td>
                        <td>$5,000</td>
                    </tr>
                    <tr><td colspan="2">&nbsp;</td></tr> <!-- Fila en blanco -->
                    <tr class="totales">
                        <td>Total de Ingresos</td>
                        <td>$25,000</td>
                    </tr>
                    <tr class="sangria"><td colspan="2">&nbsp;</td></tr> <!-- Sangría arriba del total -->
                    <tr><td colspan="2">&nbsp;</td></tr> <!-- Fila en blanco -->

                    <!-- Gastos -->
                    <tr>
                        <td class="gastos">Menos</td>
                    </tr>
                    <tr>
                        <td class="gastos">Gastos</td>
                        <td></td> <!-- Columna vacía -->
                    </tr>
                    <tr>
                        <td>Alquiler</td>
                        <td>$3,000</td>
                    </tr>
                    <tr>
                        <td>Sueldos</td>
                        <td>$10,000</td>
                    </tr>
                    <tr>
                        <td>Servicios públicos</td>
                        <td>$1,500</td>
                    </tr>
                    <tr><td colspan="2">&nbsp;</td></tr> <!-- Fila en blanco -->
                    <tr class="totales">
                        <td>Total de Gastos</td>
                        <td>$14,500</td>
                    </tr>
                    <tr class="sangria"><td colspan="2">&nbsp;</td></tr> <!-- Sangría arriba del total -->
                    <tr><td colspan="2">&nbsp;</td></tr> <!-- Fila en blanco -->

                    <!-- Utilidad Total -->
                    <tr class="totales">
                        <td>Utilidad Total</td>
                        <td>$10,500</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
@endsection
