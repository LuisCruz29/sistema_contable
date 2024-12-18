@extends('layouts.app')

@section('title')
   Nuevo Registro Diario
@endsection

@section('content')
<br>
<br>
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">Nuevo Registro Diario</span>
                    </div>
                    <div class="card-body bg-white">
                        <form method="POST" action="{{ route('tbl-registro-diario.store') }}"  role="form" enctype="multipart/form-data">
                            @csrf

                            @include('tbl-registro-diario.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script src="{{ asset('js/agregarFila.js') }}"></script>
@endsection
