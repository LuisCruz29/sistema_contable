@extends('layouts.app')
@section('title')
    BALANCE GNERAL
@endsection


@section('content')
    <h2>Balance General</h2>
    <div class="balance-container">
        <!-- Activos -->
        <div class="balance-section">
            <h4 class="fw-bold">Activos</h4>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>Descripción</th>
                        <th>Monto</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Efectivo</td>
                        <td>$10,000</td>
                    </tr>
                    <tr>
                        <td>Inventarios</td>
                        <td>$5,000</td>
                    </tr>
                    <tr>
                        <td>Cuenta por cobrar</td>
                        <td>$3,000</td>
                    </tr>
                    <tr class="depreciacion">
                        <td class="sangria">Menos: Depreciación acumulada</td>
                        <td class="sangria">($2,000)</td>
                    </tr>
                    <tr><td colspan="2">&nbsp;</td></tr> <!-- Fila en blanco -->
                    <tr class="totales">
                        <td>Total de Activos</td>
                        <td>$16,000</td>
                    </tr>
                    <tr><td colspan="2">&nbsp;</td></tr> <!-- Fila en blanco -->
                </tbody>
            </table>
        </div>

        <!-- Pasivos y Capital -->
        <div class="balance-section">
            <h4 class="fw-bold">Pasivos y Capital</h4>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>Descripción</th>
                        <th>Monto</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Deuda a corto plazo</td>
                        <td>$4,000</td>
                    </tr>
                    <tr>
                        <td>Proveedores</td>
                        <td>$2,000</td>
                    </tr>
                    <tr><td colspan="2">&nbsp;</td></tr> <!-- Fila en blanco -->
                    <tr class="totales">
                        <td class="fw-bold">Total de Pasivos</td>
                        <td>$6,000</td>
                    </tr>
                    <tr><td colspan="2">&nbsp;</td></tr> <!-- Fila en blanco -->
                    <tr>
                        <td>Capital Social</td>
                        <td>$8,000</td>
                    </tr>
                    <tr>
                        <td>Reservas</td>
                        <td>$2,000</td>
                    </tr>
                    <tr><td colspan="2">&nbsp;</td></tr> <!-- Fila en blanco -->
                    <tr class="totales">
                        <td>Total Capital</td>
                        <td>$10,000</td>
                    </tr>
                    <tr><td colspan="2">&nbsp;</td></tr> <!-- Fila en blanco -->
                    <tr class="totales">
                        <td class="fw-bold">Total Pasivo + Capital</td>
                        <td>$16,000</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
@endsection
