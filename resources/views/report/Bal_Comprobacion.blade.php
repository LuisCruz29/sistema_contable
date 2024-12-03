@extends('layouts.app')
@section('title')
    BALANCE DE COMPROBACION
@endsection
@push('css')
    
@endpush

@section('extra-classes')my-5 @endsection

@section('content')
    <h2>Balance de Comprobación</h2>
    <div class="balance-container">
        <div class="balance-section">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th></th>
                        <th colspan="3" class="adjusted">Ajustada</th>
                    </tr>
                    <tr>
                        <th>Título de Cuenta</th>
                        <th>Debe</th>
                        <th>Haber</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($balanceData as $data)
                        <tr>
                            <td>{{ $data['nombreCuenta'] }}</td>
                            <td>${{ number_format($data['totalDebe'], 2) }}</td>
                            <td>${{ number_format($data['totalHaber'], 2) }}</td>
                        </tr>
                    @endforeach
                    <tr class="total-row">
                        <td style="font-weight: bold;">Total</td>
                        <td style="font-weight: bold;">${{ number_format(array_sum(array_column($balanceData, 'totalDebe')), 2) }}</td>
                        <td style="font-weight: bold;">${{ number_format(array_sum(array_column($balanceData, 'totalHaber')), 2) }}</td>
                    </tr>

                </tbody>
            </table>
        </div>
    </div>
@endsection
