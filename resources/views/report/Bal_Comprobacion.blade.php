@extends('layouts.app')

@section('title')
    BALANCE DE COMPROBACIÓN
@endsection

@section('extra-classes') mt-3 @endsection

@section('content')
    <h2 class="text-center mb-4">Balance de Comprobación</h2>
    <div class="balance-container">
        <div class="balance-section">
            <table class="table table-striped table-bordered shadow-sm rounded-3">
                <thead class="bg-dark text-white text-center">
                    <tr>
                        <th class="text-uppercase" colspan="3">Ajustada</th> <!-- "Ajustada" alineado a la derecha -->
                    </tr>
                    <tr>
                        <th class="text-uppercase">Título de Cuenta</th>
                        <th>Debe</th>
                        <th>Haber</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($balanceData as $data)
                        <tr>
                            <td>{{ $data['nombreCuenta'] }}</td>
                            <td class="text-end">${{ number_format($data['totalDebe'], 2) }}</td>
                            <td class="text-end">${{ number_format($data['totalHaber'], 2) }}</td>
                        </tr>
                    @endforeach
                    <tr class="table-secondary text-dark">
                        <td><strong>Total</strong></td>
                        <td class="text-end"><strong>${{ number_format(array_sum(array_column($balanceData, 'totalDebe')), 2) }}</strong></td>
                        <td class="text-end"><strong>${{ number_format(array_sum(array_column($balanceData, 'totalHaber')), 2) }}</strong></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
@endsection
