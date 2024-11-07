@extends('layouts.app')
@section('title')
    BALANCE DE COMPROBACION
@endsection
@push('css')
    
@endpush

@section('extra-classes')my-5 @endsection

@section('content')
    <h2>Balance de Comprobación</h2>
    <h4>Sin terminar</h4>
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
                    <tr>
                        <td>Efectivo</td>
                        <td></td>
                        <td>$10,000</td>
                    </tr>
                    <tr>
                        <td>Cuenta por cobrar</td>
                        <td></td>
                        <td>$5,000</td>
                    </tr>
                    <tr>
                        <td>Suministros</td>
                        <td></td>
                        <td>$1,500</td>
                    </tr>
                    <tr>
                        <td>Renta pagada por adelantada</td>
                        <td></td>
                        <td>$2,000</td>
                    </tr>
                    <tr>
                        <td>Terreno</td>
                        <td></td>
                        <td>$30,000</td>
                    </tr>
                    <tr>
                        <td>Edificio</td>
                        <td></td>
                        <td>$50,000</td>
                    </tr>
                    <tr>
                        <td>Depreciación acumulada: Edificio</td>
                        <td></td>
                        <td>($5,000)</td>
                    </tr>
                    <tr>
                        <td>Cuentas por pagar</td>
                        <td></td>
                        <td>($12,000)</td>
                    </tr>
                    <tr>
                        <td>Salarios por pagar</td>
                        <td></td>
                        <td>($2,000)</td>
                    </tr>
                    <tr>
                        <td>Ingresos por servicios no devengados</td>
                        <td></td>
                        <td>($3,500)</td>
                    </tr>
                    <tr>
                        <td>Romero, Capital</td>
                        <td></td>
                        <td>($50,000)</td>
                    </tr>
                    <tr>
                        <td>Romero, Retiros</td>
                        <td>$5,000</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>Ingresos por servicios</td>
                        <td></td>
                        <td>($15,000)</td>
                    </tr>
                    <tr>
                        <td>Gastos por salarios</td>
                        <td>$8,000</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>Gastos por renta</td>
                        <td>$4,000</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>Gastos por suministros</td>
                        <td>$1,000</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>Gastos por depreciación edificio</td>
                        <td>$3,000</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>Gastos diversos</td>
                        <td>$2,000</td>
                        <td></td>
                    </tr>
                    <tr class="total-row">
                        <td>Total</td>
                        <td>$65,500</td>
                        <td>$65,500</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
@endsection
