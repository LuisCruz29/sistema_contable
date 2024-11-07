@extends('layouts.app')
@section('title')
    CONSULTA DE ASIENTO DIARIO
@endsection



@section('content')
    <h2>Consulta de Asientos Diarios</h2>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>Código Transacción</th>
                <th>Fecha</th>
                <th>ID Cuenta</th>
                <th>Debe</th>
                <th>Haber</th>
                <th>ID Empleado</th>
                <th>Descripción</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>TRN001</td>
                <td>01/01/2024</td>
                <td>1010</td>
                <td>$1,000</td>
                <td>$0</td>
                <td>EMP001</td>
                <td>Venta de productos</td>
            </tr>
            <tr>
                <td>TRN002</td>
                <td>01/01/2024</td>
                <td>2020</td>
                <td>$0</td>
                <td>$500</td>
                <td>EMP002</td>
                <td>Pago de sueldos</td>
            </tr>
            <tr>
                <td>TRN003</td>
                <td>02/01/2024</td>
                <td>1030</td>
                <td>$300</td>
                <td>$0</td>
                <td>EMP003</td>
                <td>Compra de mercancía</td>
            </tr>
            <tr>
                <td>TRN004</td>
                <td>03/01/2024</td>
                <td>3030</td>
                <td>$0</td>
                <td>$700</td>
                <td>EMP004</td>
                <td>Servicios prestados</td>
            </tr>
        </tbody>
    </table>
@endsection
