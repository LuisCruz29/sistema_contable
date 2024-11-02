@extends('layouts.app')

@section('template_title')
    {{ __('Create') }} Tbl Registro Diario
@endsection

@section('content')
<br>
<br>
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">{{ __('Create') }} Tbl Registro Diario</span>
                    </div>
                    <div class="card-body bg-white">
                        <form method="POST" action="{{ route('tbl-registro-diarios.store') }}"  role="form" enctype="multipart/form-data">
                            @csrf

                            @include('tbl-registro-diario.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
