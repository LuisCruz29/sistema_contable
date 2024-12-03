@extends('layouts.app')

@section('title')
    ESTADO DE CAPITAL
@endsection

@section('content')
<div class="container d-flex justify-content-center align-items-center my-4">
    <div class="col-12 col-lg-8">
        <div class="card shadow-sm">
            <!-- Encabezado de la tarjeta con fondo negro -->
            <div class="card-header text-center bg-black text-white">
                <h5 class="mb-0">Estado de Capital</h5>
            </div>

            <!-- Cuerpo de la tarjeta -->
            <div class="card-body">
                <table class="table table-borderless">
                    <thead>
                        <tr>
                            <th class="text-start">Descripción</th>
                            <th class="text-end">Monto</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="text-start">
                                @if($nombreCuentaCapital->isNotEmpty())
                                    {{ $nombreCuentaCapital->first() }}
                                @else
                                    Romero, Capital
                                @endif
                            </td>
                            <td class="text-end">${{ number_format($capitalInicial, 2) }}</td>
                        </tr>
                        <tr>
                            <td colspan="2" class="py-2">&nbsp;</td>
                        </tr>
                        <tr>
                            <td class="fw-bold text-start">Más</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td class="text-start">Utilidad neta</td>
                            <td class="text-end">${{ number_format($utilidadNeta, 2) }}</td>
                        </tr>
                        <tr>
                            <td colspan="2" class="py-2">&nbsp;</td>
                        </tr>
                        <tr>
                            <td class="fw-bold text-start">Menos</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td class="text-start">
                                @if($nombreCuentaRetiro->isNotEmpty())
                                    {{ $nombreCuentaRetiro->first() }}
                                @else
                                    Romero, Retiros
                                @endif
                            </td>
                            <td class="text-end">${{ number_format($retiros, 2) }}</td>
                        </tr>
                        <tr>
                            <td colspan="2" class="py-2">&nbsp;</td>
                        </tr>
                        <tr class="fw-bold border-top">
                            <td class="text-start">Capital Total</td>
                            <td class="text-end">${{ number_format($capitalTotal, 2) }}</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
