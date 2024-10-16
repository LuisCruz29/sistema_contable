@extends('layouts.app')
@section('title')
    ESTADO DE CAPITAL
@endsection
@push('css')
    <link rel="stylesheet" href="{{ asset('css/estadocapital.css') }}">
@endpush

@section('extra-classes')my-5 @endsection

@section('content')
    <h2>Estado de Capital</h2>
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
                    <!-- Capital Inicial -->
                    <tr>
                        <td>Romero, Capital</td>
                        <td>$50,000</td>
                    </tr>
                    <tr>
                        <td colspan="2">&nbsp;</td>
                    </tr> <!-- Fila en blanco -->

                    <tr>
                        <td class="fw-bold">Mas</td>
                        <td></td>
                    </tr>
                    <!-- Retiros -->
                    <tr>
                        <td>Utilidad neta</td>
                        <td>($10,500)</td>
                    </tr>
                    <tr>
                        <td colspan="2">&nbsp;</td>
                    </tr> <!-- Fila en blanco -->

                    <tr>
                        <td class="fw-bold">Menos</td>
                        <td></td>
                    </tr>
                    <!-- Retiros -->
                    <tr>
                        <td>Romero, Retiros</td>
                        <td>($5,000)</td>
                    </tr>
                    <tr>
                        <td colspan="2">&nbsp;</td>
                    </tr> <!-- Fila en blanco -->

                    <!-- Capital Total -->
                    <tr class="capital-total"> <!-- Aplicando estilo de borde -->
                        <td>Capital Total</td>
                        <td>$55,500</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>  
@endsection
