@extends('layouts.app')

@section('title')
 REGISTRO EN EL DIARIO
@endsection

@push('css')
    <link rel="stylesheet" href="{{ asset('css/estadoresultados.css') }}">
@endpush

@section('extra-classes')my-5 @endsection

@section('content')
    <h2>Registrar Asiento Diario</h2>
    <form>
        <div class="mb-3">
            <label for="codigoTransaccion" class="form-label">Código Transacción</label>
            <input type="text" class="form-control" id="codigoTransaccion" placeholder="Ingrese el código de la transacción" required>
        </div>
        <div class="mb-3">
            <label for="fecha" class="form-label">Fecha</label>
            <input type="date" class="form-control" id="fecha" required>
        </div>
        <div class="mb-3">
            <label for="idCuenta" class="form-label">ID Cuenta</label>
            <input type="text" class="form-control" id="idCuenta" placeholder="Ingrese el ID de la cuenta" required>
        </div>
        <div class="mb-3">
            <label for="debe" class="form-label">Debe</label>
            <input type="number" class="form-control" id="debe" placeholder="Ingrese el monto a debitar" required>
        </div>
        <div class="mb-3">
            <label for="haber" class="form-label">Haber</label>
            <input type="number" class="form-control" id="haber" placeholder="Ingrese el monto a acreditar" required>
        </div>
        <div class="mb-3">
            <label for="idEmpleado" class="form-label">ID Empleado</label>
            <input type="text" class="form-control" id="idEmpleado" placeholder="Ingrese el ID del empleado" required>
        </div>
        <div class="mb-3">
            <label for="descripcion" class="form-label">Descripción</label>
            <textarea class="form-control" id="descripcion" rows="3" placeholder="Descripción del asiento" required></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Registrar Asiento</button>
    </form>
@endsection
