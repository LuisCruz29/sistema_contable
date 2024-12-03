@extends('layouts.app')
@section('title')
    ESTADO DE CAPITAL
@endsection

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
             
                    <tr>
                        <td>
                            @if($nombreCuentaCapital->isNotEmpty())
                                {{ $nombreCuentaCapital->first() }} 
                            @else
                                Romero, Capital
                            @endif
                        </td>
                        <td>${{ number_format($capitalInicial, 2) }}</td>
                    </tr>
                    <tr>
                        <td colspan="2">&nbsp;</td>
                    </tr>

                    <tr>
                        <td style="font-weight: bold;">Más</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>Utilidad neta</td>
                        <td>${{ number_format($utilidadNeta, 2) }}</td>
                    </tr>
                    <tr>
                        <td colspan="2">&nbsp;</td>
                    </tr>

                    <tr>
                        <td style="font-weight: bold;">Menos</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>
                            @if($nombreCuentaRetiro->isNotEmpty())
                                {{ $nombreCuentaRetiro->first() }} 
                            @else
                                Romero, Retiros
                            @endif
                        </td>
                        <td>${{ number_format($retiros, 2) }}</td>
                    </tr>
                    <tr>
                        <td colspan="2">&nbsp;</td>
                    </tr>

                    <tr style="font-weight: bold; border-top: 2px solid black;">
                        <td>Capital Total</td>
                        <td>${{ number_format($capitalTotal, 2) }}</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
@endsection
