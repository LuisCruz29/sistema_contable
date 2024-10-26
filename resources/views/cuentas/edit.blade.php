@extends('layouts.app')

@section('title')
    Modificar Cuenta  
@endsection
@section('content')
    <br>
    <br>
    <section class="content container-fluid">
        <div class="">
            <div class="col-md-12">

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">{{ __('Update') }} Cuenta</span>
                    </div>
                    <div class="card-body bg-white">
                        <form method="POST" action="{{ route('users.update', $user->id) }}"  role="form" enctype="multipart/form-data">
                            {{ method_field('PATCH') }}
                            @csrf

                            @include('cuentas.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
