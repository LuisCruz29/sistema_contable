@extends('layouts.app')

@section('template_title')
    {{ __('Create') }} Cuenta
@endsection

@section('content')
    <section class="content container-fluid mt-5 ">
        <div class="row ">
            <div class="col-md-12 ">

                <div class="card card-default ">
                    <div class="card-header">
                        <span class="card-title">{{ __('Crear') }} Cuenta</span>
                    </div>
                    <div class="card-body bg-white">
                        <form method="POST" action="{{ route('tbl-cuentas.store') }}"  role="form" enctype="multipart/form-data">
                            @csrf

                            @include('tbl-cuenta.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
