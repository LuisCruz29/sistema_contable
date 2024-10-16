@extends('layouts.app')
@section('title')
    Principal
@endsection
@section('estilo-classes')
    max-width: 1200px; margin: 0 auto;
@endsection
@push('css')
    <link rel="stylesheet" href="{{ asset('css/principal.css') }}">
@endpush

@section('extra-classes')my-5 section @endsection

@section('content')
    <p class="text-center fw-bold fs-3">Bienvenido a nuestro sistema contable. A continuación, te presentamos algunas características clave que facilitan la gestión de tus finanzas.</p>
            
    <div class="row d-flex justify-content-center">
        <div class="col-md-4 mb-4 d-flex align-items-stretch">
            <div class="card p-4 text-center">
                <div class="feature-icon">
                    <i class="bi bi-file-earmark-text"></i>
                </div>
                <h4>Registro Sencillo</h4>
                <p>Ingresa tus asientos diarios de manera rápida y fácil. Nuestro sistema está diseñado para que no pierdas tiempo en procesos complicados.</p>
            </div>
        </div>
        <div class="col-md-4 mb-4 d-flex align-items-stretch">
            <div class="card p-4 text-center">
                <div class="feature-icon">
                    <i class="bi bi-check-circle"></i>
                </div>
                <h4>Validación Automática</h4>
                <p>Recibe notificaciones y validaciones en tiempo real, asegurando que tus registros sean precisos y completos.</p>
            </div>
        </div>
        <div class="col-md-4 mb-4 d-flex align-items-stretch">
            <div class="card p-4 text-center">
                <div class="feature-icon">
                    <i class="bi bi-bar-chart-line"></i>
                </div>
                <h4>Informes Personalizados</h4>
                <p>Genera informes contables personalizados que te ayudarán a tomar decisiones informadas para tu negocio.</p>
            </div>
        </div>
    </div>

    <div class="row d-flex justify-content-center">
        <div class="col-md-4 mb-4 d-flex align-items-stretch">
            <div class="card p-4 text-center">
                <div class="feature-icon">
                    <i class="bi bi-shield-lock"></i>
                </div>
                <h4>Seguridad y Privacidad</h4>
                <p>Tu información está protegida con los más altos estándares de seguridad. Nos tomamos muy en serio la privacidad de tus datos.</p>
            </div>
        </div>
        <div class="col-md-4 mb-4 d-flex align-items-stretch">
            <div class="card p-4 text-center">
                <div class="feature-icon">
                    <i class="bi bi-phone"></i>
                </div>
                <h4>Soporte al Cliente</h4>
                <p>Contamos con un equipo de soporte disponible para ayudarte en cualquier momento. Estamos aquí para ti.</p>
            </div>
        </div>
        <div class="col-md-4 mb-4 d-flex align-items-stretch">
            <div class="card p-4 text-center">
                <div class="feature-icon">
                    <i class="bi bi-gear"></i>
                </div>
                <h4>Fácil de Usar</h4>
                <p>Interfaz intuitiva y fácil de usar que te permite gestionar tu contabilidad sin complicaciones.</p>
            </div>
        </div>
    </div>
@endsection
